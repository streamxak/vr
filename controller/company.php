<?php
	class company {
		
		public function add() {
			
			if (!isset($_SESSION['user'])) header ("Location: /user/login/");
			// ссылка на дефолтное лого /view/assets/img/logo-default.png
			$name = ''; $category = ''; $description = ''; $logo = ''; $image = ''; $location = ''; $employ = ''; $website = ''; $found = ''; $phone = ''; $email = '';
			$social_vk = ''; $social_fb = ''; $social_tw = ''; $social_gp = ''; $social_gh = ''; $social_pi = ''; $social_in = ''; $social_yt = ''; $detail = '';
			
			$errors = false;
			
			if (isset($_POST['submit'])) {
				$user_id = $_SESSION['user'];
				$name = $_POST['name'];
				$url_name = urlgen::getUrl($name);
				$category = $_POST['category'];
				$url_category = urlgen::getUrl($category);
				$description = $_POST['description'];
				$location = $_POST['location'];
				$employ = $_POST['employ'];
				$website = $_POST['website'];
				$found = $_POST['found'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$social_vk = $_POST['social_vk'];
				$social_fb = $_POST['social_fb'];
				$social_tw = $_POST['social_tw'];
				$social_gp = $_POST['social_gp'];
				$social_gh = $_POST['social_gh'];
				$social_pi = $_POST['social_pi'];
				$social_in = $_POST['social_in'];
				$social_yt = $_POST['social_yt'];
				$detail = $_POST['detail'];
				$active = 1;
				$confirm = 0;
				
				if (!$name) $errors[] = 'Заполните название организации.';
				if (!$category) $errors[] = 'Укажите сферу деятельности.';
				if (!$description) $errors[] = 'Коротко опишите вашу компанию.';
				if (!$location) $errors[] = 'Укажите город.';
				if (!$employ) $errors[] = 'Укажите количество сотрудников.';
				if (!$found) $errors[] = 'Укажите дату основания организации.';
				if (!$phone) $errors[] = 'Укажите контактный телефон.';
				if (!$email) $errors[] = 'Укажите электронную почту.';
				
				if ($_FILES['logo']['size'] > 200 * 1024) $errors[] = 'Размер логотипа не должен превышать 200 кБайт.';
				if ($_FILES['image']['size'] > 500 * 1024) $errors[] = 'Размер обложки не должен превышать 500 кБайт.';
				
				//если ошибок нет - записываем
				if ($errors == false) {
					if ($_FILES['logo']['name']) {
						$logo = company_m::saveImage($_FILES['logo']['tmp_name'], 'ca-');
					}
					if ($_FILES['image']['name'])
						$image = company_m::saveImage($_FILES['image']['tmp_name'], 'ca-');
					
					$addCompany = company_m::companyAdd($user_id, $name, $url_name, $category, $url_category, $description, $logo, $image, $location, $employ, $website, $found, $phone, $email, $social_vk, $social_fb, $social_tw, $social_gp, $social_gh, $social_pi, $social_in, $social_yt, $detail, $active, $confirm);
					if ($addCompany)
						header ('Location: /company/manage/');
				}
			}
			
			require_once (ROOT.'/view/company-add.php');
			
			return true;
		}
		
		public function manage() {
			
			if (!isset($_SESSION['user'])) header ("Location: /user/login/");
			
			$companylist = company_m::getCompanyList($_SESSION['user']);
			
			require_once (ROOT.'/view/company-manage.php');
			return true;
		}
		
		public function detail() {
			
			require_once (ROOT.'/view/company-detail.php');
			return true;
		}
	}
?>