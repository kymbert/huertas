<?php
	class SelectController {
		public function region() {
			$db = Db::getInstance();
			$sql = 'SELECT id, name FROM regions;';
			$regions = $db->query($sql);
			$regions = $regions->fetchAll();
			require_once 'views/select/region.php';
		}
		
		public function month() {
			$region = $_POST['region'];
			require_once 'views/select/month.php';
		}
		
		public function transplant() {
			$region = $_POST['region'];
			$month = $_POST['month'];
			require_once 'views/select/transplant.php';
		}
		
		public function harvest_time() {
			$region = $_POST['region'];
			$month = $_POST['month'];
			$transplant = $_POST['transplant'];
			
			$db = Db::getInstance();
			$sql = 'SELECT id, string_es FROM harvest_times;';
			$harvest_times = $db->query($sql);
			$harvest_times = $harvest_times->fetchAll();
			
			require_once 'views/select/harvest_time.php';
		}
		
		public function results() {
			$region = $_POST['region'];
			$month = $_POST['month'];
			$transplant = $_POST['transplant'];
			$harvest_time = $_POST['harvest_time'];
			
			$db = Db::getInstance();
			$sql = 'SELECT * FROM crop_details ';
			$sql .= 'WHERE crop_id IN (';
			$sql .= 'SELECT id FROM crops ';
			$sql .= 'WHERE region=' . $region . ' && transplant=' . $transplant . ' && harvest_time=' . $harvest_time . ') ';
			$sql .= "&& months_to_plant LIKE '%" . $month . "%';";
			$req = $db->query($sql);
			$crop_details = [];
			foreach($req->fetchAll() as $crop_detail) {
				$crop_details[] = new CropDetail($crop_detail['id'], $crop_detail['crop_id'], $crop_detail['name_common'], $crop_detail['name_scientific'], $crop_detail['months_to_plant'], $crop_detail['edible_part'], $crop_detail['root_depth'], $crop_detail['sowing_method'], $crop_detail['plant_distance'], $crop_detail['row_width'], $crop_detail['plants_per_10m'], $crop_detail['germination'], $crop_detail['time_to_transplant'], $crop_detail['time_to_harvest'], $crop_detail['harvest_indicator'], $crop_detail['other']);
			}
			
			require_once 'views/crops/list.php';
		}
	}