<?php
	class CropDetailsController {
		public function display() {
			if (!isset($_GET['id'])) {
				return call('pages', 'error');
			}
			$crop = CropDetail::find($_GET['id']);
			require_once 'views/crops/detail.php';
		}
		
		public function edit() {
			if (!isset($_GET['id'])) {
				return call('pages', 'error');
			}
			$crop = CropDetail::find($_GET['id']);
			require_once 'views/crops/update_crop.php';
		}
		
		public function update() {
			$crop_id = $_POST['crop_id'];
			$name_common = $_POST['name_common'];
			$name_scientific = $_POST['name_scientific'];
			$months_to_plant = $_POST['months'];
			$edible_part = $_POST['edible_part'];
			$root_depth = $_POST['root_depth'];
			$sowing_method = $_POST['sowing_method'];
			$plant_distance = $_POST['plant_distance'];
			$row_width = $_POST['row_width'];
			$plants_per_10m = $_POST['plants_per_10m'];
			$germination = $_POST['germination'];
			$time_to_transplant = $_POST['time_to_transplant'];
			$time_to_harvest = $_POST['time_to_harvest'];
			$harvest_indicator = $_POST['harvest_indicator'];
			$other = $_POST['other'];
			CropDetail::update($crop_id,
							$name_common,
							$name_scientific,
							$months_to_plant,
							$edible_part,
							$root_depth,
							$sowing_method,
							$plant_distance,
							$row_width,
							$plants_per_10m,
							$germination,
							$time_to_transplant,
							$time_to_harvest,
							$harvest_indicator,
							$other);
			$crops = CropDetail::all();
			require_once 'views/crops/admin.php';
		}
	}