<?php
	class register_m {
		
		public static function checkName($name) {
			
			if (strlen($name) >= 2) {
				return true;
			}
			return false;
			
		}
		
		public static function checkPassword($password) {
			
			if (strlen($password) >= 6) {
				return true;
			}
			return false;
			
		}
		
		public static function checkEmail($email) {
			
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				return true;
			}
			return false;
			
		}
		
		public static function checkEmailExist($email) {
		
			$db = db::getConnection();
			$sql = 'SELECT COUNT(*) FROM users WHERE email = :email';
			
			$result = $db->prepare($sql);
			$result->bindParam(':email', $email, PDO::PARAM_STR);
			$result->execute();
			
			if ($result->fetchColumn()) return true;
			
			return false;
			
		}
		
		public static function getRegister($name, $email, $password) {
			
			$db = db::getConnection();
			$sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
			
			$result = $db->prepare($sql);
			$result->bindParam(':name', $name, PDO::PARAM_STR);
			$result->bindParam(':email', $email, PDO::PARAM_STR);
			$result->bindParam(':password', $password, PDO::PARAM_STR);
			
			return $result->execute();
		}
		
	}
	
?>