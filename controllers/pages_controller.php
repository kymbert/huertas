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
			require_once 'views/pages/new_crop.php';
		}
	
		public function error() {
			require_once 'views/pages/error.php';
		}
	}
