<?php
	class login {
		
		public function userlogin() {
			
			$email = ''; $password = '';
			
			if (isset($_POST['submit'])) {
				$email = $_POST['email'];
				$password = $_POST['password'];
				
				$errors = false;
				
				if (!$email || !$password) {
					$errors['empty'] = 'Пожалуйста, заполните поля формы.';
				}
			
				if (!register_m::checkEmail($email) && !isset($errors['empty'])) {
					$errors['email'] = 'Адрес электронной почты не валиден, пожалуйста введите другой адрес.';
				}
				
				if (!register_m::checkEmailExist($email) && !isset($errors['empty'])) {
					$errors['email'] = 'Пользователь с такой электронной почтой не зарегистрирован.';
				}
			
				$userid = login_m::checkUserData($email, $password);
				if ($userid == false) $errors['user'] = 'Указанные данные не найдены или не совпадают.';
				else {
					login_m::auth($userid);
					header ('Location: /');
				}
				
			}
			
			require_once (ROOT.'/view/user-login.php');
			
			return true;
		}
		
		public static function userlogout() {
			
			session_unset();
			session_destroy();
			
			header ('Location: /');
		}
	}
?>