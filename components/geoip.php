<?php
	class geoip {
		
		public static function getGeoCity($ip) {
		
			require_once (ROOT.'/components/geoip/geoipbase.php');
			
			$gb = new IPGeoBase();
			$location = $gb->getRecord($ip);
			
			return $location;
		}
	}

?>