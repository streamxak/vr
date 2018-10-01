<?php
	class register {
		
		public function userregister() {
			
			$name = ''; $email = ''; $password = ''; $register = false;
			
			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				
				$errors = false;
				
				if (!$name || !$email || !$password) {
					$errors['empty'] = 'Пожалуйста, заполните поля формы.';
				}
			
				if (!register_m::checkName($name) && !isset($errors['empty'])) {
					$errors['name'] = 'Имя не должно быть меньше 2х букв.';
				}
			
				if (!register_m::checkEmail($email) && !isset($errors['empty'])) {
					$errors['email'] = 'Адрес электронной почты не валиден, пожалуйста введите другой адрес.';
				}
				
				if (register_m::checkEmailExist($email)) {
					$errors['email'] = 'Пользователь с такой электронной почтой уже зарегистрирован.';
				}
			
				if (!register_m::checkPassword($password) && !isset($errors['empty'])) {
					$errors['password'] = 'Пароль не должен быть менее 6ти символов.';
				}
			
				if ($errors == false) {
					$register = register_m::getRegister($name, $email, $password);
				}
				
			}
			
			require_once (ROOT.'/view/user-register.php');
			
			return true;
		}
	}
?>