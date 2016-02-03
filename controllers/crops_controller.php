<?php
	class CropsController {
		public function index() {
			$crops = Crop::all();
			require_once 'views/crops/index.php';
		}
		
		public function admin() {
			$crops = Crop::all();
			require_once 'views/crops/admin.php';
		}
		
		public function detail() {
			if (!isset($_GET['id'])) {
				return call('pages', 'error');
			}
			$crop = Crop::find($_GET['id']);
			require_once 'views/crops/detail.php';
		}
		
		public function add() {
			$common_name = $_POST['common-name'];
			$scientific_name = $_POST['scientific-name'];
			$harvest_time = $_POST['harvest-time'];
			$months = $_POST['months'];
			$details = $_POST['details'];
			Crop::add($common_name, $scientific_name, $harvest_time, $months, $details);
		}
		
		public function remove() {
			if (!isset($_GET['id'])) {
				return call('pages', 'error');
			}
			Crop::remove($_GET['id']);
			$crops = Crop::all();
			require_once 'views/crops/admin.php';
		}
		
		public function results() {
			$month = $_POST['month'];
			$harvest_time = $_POST['harvest_time'];
			$crops = Crop::search($month, $harvest_time);
			require_once 'views/crops/results.php';
		}
	}