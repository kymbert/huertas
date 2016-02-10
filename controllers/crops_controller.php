<?php
	class CropsController {
		public function list_all() {
			$crop_details = CropDetail::all();
			require_once 'views/crops/list.php';
		}
		
		public function admin() {
			$crops = CropDetail::all();
			require_once 'views/crops/admin.php';
		}
		
		public function add() {
			$region = $_POST['region'];
			$harvest_time = $_POST['harvest_time'];
			if (isset($_POST['transplant'])){
				$transplant = $_POST['transplant'];
			} else {
				$transplant = 'false';
			}
			$id = Crop::add($region, $harvest_time, $transplant);
			require_once 'views/crops/update_crop.php';
		}
		
		public function remove() {
			if (!isset($_GET['id'])) {
				return call('pages', 'error');
			}
			Crop::remove($_GET['id']);
			CropDetail::remove($_GET['id']);
			$crops = CropDetail::all();
			require_once 'views/crops/admin.php';
		}
		
		public function results() {
			$month = $_POST['month'];
			$harvest_time = $_POST['harvest_time'];
			$crops = Crop::search($month, $harvest_time);
			require_once 'views/crops/results.php';
		}
		
		public function edit() {
			if (!isset($_GET['id'])) {
				return call('pages', 'error');
			}
			$crop = Crop::find($_GET['id']);
			$crop->details = strip_tags($crop->details);
			require_once 'views/crops/edit.php';
		}
		
		public function update_crop() {
			$id = $_POST['id'];
			$common_name = $_POST['common-name'];
			$scientific_name = $_POST['scientific-name'];
			$harvest_time = $_POST['harvest-time'];
			$months = $_POST['months'];
			$details = $_POST['details'];
			Crop::update($id, $common_name, $scientific_name, $harvest_time, $months, $details);
			$crops = Crop::all();
			require_once 'views/crops/admin.php';
		}

	}