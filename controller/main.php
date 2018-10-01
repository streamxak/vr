<?php
	class main {
		
		public function index() {
			
			$location = geoip::getGeoCity($_SERVER['REMOTE_ADDR']);
			
			$citylist = main_m::getCityList();
			
			$joblist = main_m::getJobList();
			$jobcount = main_m::getJobCount();
			$usercount = main_m::getUserCount();
			$cvcount = main_m::getCvCount();
			$firmcount = main_m::getFirmCount();
			
			require_once (ROOT.'/view/index.php');
			
			return true;
		}
	}
?>