<?php
	class main_m {
		
		public static function getJobCount() {
			
			$db = db::getConnection();
			$result = $db->query('SELECT COUNT(*) FROM jobs WHERE active = "1"');
			
			return $result->fetchColumn();
		}
		
		public static function getUserCount() {
			
			$db = db::getConnection();
			$result = $db->query('SELECT COUNT(*) FROM users WHERE active = "1"');
			
			return $result->fetchColumn();
		}
		
		public static function getCvCount() {
			
			$db = db::getConnection();
			$result = $db->query('SELECT COUNT(*) FROM cvs WHERE active = "1"');
			
			return $result->fetchColumn();
		}
		
		public static function getFirmCount() {
			
			$db = db::getConnection();
			$result = $db->query('SELECT COUNT(*) FROM firms WHERE active = "1"');
			
			return $result->fetchColumn();
		}
		
		public static function getJobList() {
			
			$db = db::getConnection();
			$joblist = array();
			$result = $db->query('SELECT title FROM jobs WHERE active = "1"');
			
			$i = 0;
			while($row = $result->fetch()) {
				$joblist[$i] = $row['title'];
				$i++;
			}
			
			return array_unique($joblist);
		}
		
		public static function getCityList() {
			
			$filename = ROOT.'/components/geoip/citieslist.txt';
			
			if (file_exists($filename)) {
				$citylist = file($filename, FILE_IGNORE_NEW_LINES);
				return $citylist;
			}
			
			return false;
		}
	}

?>