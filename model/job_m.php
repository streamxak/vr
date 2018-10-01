<?php

	class job_m {
		
		const SHOW_BY_DEFAULT = 10;
		
		public static function getJobById($id) {
			
			$id = intval($id);
			
			if ($id) {
				
				$db = db::getConnection();
				
				$result = $db->query('SELECT * FROM jobs WHERE active = "1" AND id = "'.$id.'"');
				
				$result->setFetchMode(PDO::FETCH_ASSOC);
				
				$jobItem = $result->fetch();
				
				return $jobItem;
			}
		}
		
		public static function getJobCategory($category, $page) {
			
			$category = strval($category);
			
			if ($category) {
			
			$db = db::getConnection();
			
			$jobList = array();
			$limit = self::SHOW_BY_DEFAULT;
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;
			
			$result = $db->query('SELECT * FROM jobs WHERE active = "1" AND category = "'.$category.'" ORDER BY date DESC LIMIT '.$limit.' OFFSET '.$offset);
			
			$i = 0;
			while($row = $result->fetch()) {
				$jobList[$i]['id'] = $row['id'];
				$jobList[$i]['category'] = $row['category'];
				$jobList[$i]['title'] = $row['title'];
				$jobList[$i]['date'] = $row['date'];
				$jobList[$i]['description'] = $row['description'];
				$jobList[$i]['company'] = $row['company'];
				$jobList[$i]['worktime'] = $row['worktime'];
				$jobList[$i]['location'] = $row['location'];
				$jobList[$i]['cash'] = $row['cash'];
				$jobList[$i]['ascendancy'] = $row['ascendancy'];
				$i++;
			}
			
			return $jobList;
			
			}
		}
		
		public static function getJobList($page) {
			
			$db = db::getConnection();
			
			$jobList = array();
			$limit = self::SHOW_BY_DEFAULT;
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;
			
			$result = $db->query('SELECT * FROM jobs WHERE active = "1" ORDER BY date DESC LIMIT '.$limit.' OFFSET '.$offset);
			
			$i = 0;
			while($row = $result->fetch()) {
				$jobList[$i]['id'] = $row['id'];
				$jobList[$i]['category'] = $row['category'];
				$jobList[$i]['title'] = $row['title'];
				$jobList[$i]['date'] = $row['date'];
				$jobList[$i]['description'] = $row['description'];
				$jobList[$i]['company'] = $row['company'];
				$jobList[$i]['worktime'] = $row['worktime'];
				$jobList[$i]['location'] = $row['location'];
				$jobList[$i]['cash'] = $row['cash'];
				$jobList[$i]['ascendancy'] = $row['ascendancy'];
				$i++;
			}
			
			return $jobList;
		}
		
		public static function getCatsList() {
			
			$db = db::getConnection();
			
			$catList = array();
			$result = $db->query('SELECT * FROM cats WHERE active = "1" ORDER BY id ASC');
			
			$i = 0;
			while($row = $result->fetch()) {
				$catList[$i]['id'] = $row['id'];
				$catList[$i]['title'] = $row['title'];
				$catList[$i]['url'] = $row['url'];
				$i++;
			}
			
			return $catList;
		}
		
		/**
     	* Возвращаем количество товаров в указанной категории
     	* @param integer $categoryId
		* @return integer
		*/
		public static function getTotalJobs($category) {
			// Соединение с БД
			$db = Db::getConnection();

			// Текст запроса к БД
			if ($category)
				$sql = 'SELECT COUNT(id) AS count FROM jobs WHERE active = "1" AND category = :category';
			else
				$sql = 'SELECT COUNT(id) AS count FROM jobs WHERE active = "1"';

			// Используется подготовленный запрос
			$result = $db->prepare($sql);
			$result->bindParam(':category', $category, PDO::PARAM_INT);

			// Выполнение коменды
			$result->execute();

			// Возвращаем значение count - количество
			$row = $result->fetch();
			
			return $row['count'];
		}
	}
?>