<?php
	class company_m {
		
		public static function companyAdd($user_id, $name, $url_name, $category, $url_category, $description, $logo, $image, $location, $employ, $website, $found, $phone, $email, $social_vk, $social_fb, $social_tw, $social_gp, $social_gh, $social_pi, $social_in, $social_yt, $detail, $active, $confirm) {
			
			$db = db::getConnection();
			$sql = 'INSERT INTO firms (`user_id`, `name`, `url_name`, `category`, `url_category`, `description`, `logo`, `image`, `location`, `employ`, `website`, `found`, `phone`, `email`, `social_vk`, `social_fb`, `social_tw`, `social_gp`, `social_gh`, `social_pi`, `social_in`, `social_yt`, `detail`, `active`, `confirm`) 
			VALUES (:user_id, :name, :url_name, :category, :url_category, :description, :logo, :image, :location, :employ, :website, :found, :phone, :email, :social_vk, :social_fb, :social_tw, :social_gp, :social_gh, :social_pi, :social_in, :social_yt, :detail, :active, :confirm)';
			
			$result = $db->prepare($sql);
			$result->bindParam(':user_id', $user_id, PDO::PARAM_INT);
			$result->bindParam(':name', $name, PDO::PARAM_STR);
			$result->bindParam(':url_name', $url_name, PDO::PARAM_STR);
			$result->bindParam(':category', $category, PDO::PARAM_STR);
			$result->bindParam(':url_category', $url_category, PDO::PARAM_STR);
			$result->bindParam(':description', $description, PDO::PARAM_STR);
			$result->bindParam(':logo', $logo, PDO::PARAM_STR);
			$result->bindParam(':image', $image, PDO::PARAM_STR);
			$result->bindParam(':location', $location, PDO::PARAM_STR);
			$result->bindParam(':employ', $employ, PDO::PARAM_STR);
			$result->bindParam(':website', $website, PDO::PARAM_STR);
			$result->bindParam(':found', $found, PDO::PARAM_STR);
			$result->bindParam(':phone', $phone, PDO::PARAM_STR);
			$result->bindParam(':email', $email, PDO::PARAM_STR);
			$result->bindParam(':social_vk', $social_vk, PDO::PARAM_STR);
			$result->bindParam(':social_fb', $social_fb, PDO::PARAM_STR);
			$result->bindParam(':social_tw', $social_tw, PDO::PARAM_STR);
			$result->bindParam(':social_gp', $social_gp, PDO::PARAM_STR);
			$result->bindParam(':social_gh', $social_gh, PDO::PARAM_STR);
			$result->bindParam(':social_pi', $social_pi, PDO::PARAM_STR);
			$result->bindParam(':social_in', $social_in, PDO::PARAM_STR);
			$result->bindParam(':social_yt', $social_yt, PDO::PARAM_STR);
			$result->bindParam(':detail', $detail, PDO::PARAM_STR);
			$result->bindParam(':active', $active, PDO::PARAM_INT);
			$result->bindParam(':confirm', $confirm, PDO::PARAM_INT);

			return $result->execute();
		}
		
		public static function saveImage($filepath, $prefix) {
			
			$uploaddir = '/upload/img/';
			$md5name = md5_file($filepath).'.jpg';
			$uploadfile = $uploaddir.$md5name;
			if (file_exists($uploadfile)) return ($uploadfile);
			move_uploaded_file($filepath, ROOT.$uploadfile);
			/*$uploaddir = '/upload';
			$upfilename = tempnam($uploaddir, $prefix).'.jpg';
			$uploadfile = $uploaddir . $upfilename;
			move_uploaded_file($filepath, ROOT.$uploadfile);*/
			return $uploadfile;
		}
		
		public static function getCompanyList($user_id) {
			
			$db = db::getConnection();
			
			$result = $db->query('SELECT * FROM `firms` WHERE `user_id` = '.$user_id.' ORDER BY `name` DESC');
			
			$i = 0;
			while($row = $result->fetch()) {
				$companyList[$i]['id'] = $row['id'];
				$companyList[$i]['name'] = $row['name'];
				$companyList[$i]['url_name'] = $row['url_name'];
				$companyList[$i]['category'] = $row['category'];
				$companyList[$i]['url_category'] = $row['url_category'];
				$companyList[$i]['logo'] = $row['logo'];
				
				$companyList[$i]['job_count'] = company_m::getJobCount($row['id']);

				$i++;
			}
			
			return $companyList;
		}
		
		public static function getJobCount($id) {
			
			$db = db::getConnection();
			$sql = 'SELECT COUNT(*) FROM jobs WHERE company_id = :id';
			
			$result = $db->prepare($sql);
			$result->bindParam(':id', $id, PDO::PARAM_INT);
			$result->execute();
			
			return $result->fetchColumn();
		}
	}
?>