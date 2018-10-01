<?php

	class job {
		
		//Просмотр списка вакансий
		public function index($page = 1) {
			
			$jobList = array();
			$jobList = job_m::getJobList($page);
			
			$catList = job_m::getCatsList();
			
			$total = job_m::getTotalJobs($category = null);
			
			$pagination = new pagination($total, $page, job_m::SHOW_BY_DEFAULT, 'page-');
			
			require_once(ROOT.'/view/job-list.php');
			
			return true;
		}
		
		//Просмотр одной вакансии по id
		public function view($category, $id) {
			
			$jobItem = job_m::getJobById($id);
			
			require_once(ROOT.'/view/job-detail.php');
			
			return true;
		}
		
		public function category($category, $page = 1) {
			
			$jobList = array();
			$jobList = job_m::getJobCategory($category, $page);
			
			$catList = job_m::getCatsList();
			
			$total = job_m::getTotalJobs($category);
			
			$pagination = new pagination($total, $page, job_m::SHOW_BY_DEFAULT, 'page-');
			
			require_once(ROOT.'/view/job-list.php');
			
			return true;
		}
		
	}
?>