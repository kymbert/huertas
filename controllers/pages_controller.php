<?php
	class PagesController {
		public function home() {
			require_once 'views/pages/home.php';
		}
	
		public function admin() {
// 			$crops = Crop::all();
			require_once 'views/pages/admin.php';
		}
		
		public function new_crop() {
			$db = Db::getInstance();
			$sql = 'SELECT id, string_es FROM harvest_times;';
			$harvest_times = $db->query($sql);
			$harvest_times = $harvest_times->fetchAll();

			$sql = 'SELECT id, name FROM regions;';
			$regions = $db->query($sql);
			$regions = $regions->fetchAll();
			
			require_once 'views/pages/new_crop.php';
		}
	
		public function  select_crops() {
			require_once 'views/pages/select_crops.php';
		}
		
		public function error() {
			require_once 'views/pages/error.php';
		}
	}
