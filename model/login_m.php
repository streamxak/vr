<?php
	class login_m {
		
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
		
		public static function checkUserData($email, $password) {
			
			$db = db::getConnection();
			$sql = 'SELECT * FROM users WHERE email = :email AND password = :password';
			
			$result = $db->prepare($sql);
			$result->bindParam(':email', $email, PDO::PARAM_INT);
			$result->bindParam(':password', $password, PDO::PARAM_INT);
			$result->execute();
			
			$user = $result->fetch();
			if ($user) return $user['id'];
			
			return false;
		}
		
		public static function auth($userid) {
			
			$_SESSION['user'] = $userid;
		}
		
		public static function checkLogin() {
			
			if (isset($_SESSION['user'])) return $_SESSION['user'];
			
			return false;
		}
		
	}
?>