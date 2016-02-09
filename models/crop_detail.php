<?php
	class CropDetail {
		public $id;
		public $crop_id;
		public $name_common;
		public $name_scientific;
		public $months_to_plant;
		public $edible_part;
		public $root_depth;
		public $sowing_method;
		public $plant_distance;
		public $row_width;
		public $plants_per_10m;
		public $germination;
		public $time_to_transplant;
		public $time_to_harvest;
		public $harvest_indicator;
		public $other;
		
		public function __construct($id,
									$crop_id,
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
									$other) {
			$this->id = $id;
			$this->crop_id = $crop_id;
			$this->name_common = $name_common;
			$this->name_scientific = $name_scientific;
			$this->months_to_plant = $months_to_plant;
			$this->edible_part = $edible_part;
			$this->root_depth = $root_depth;
			$this->sowing_method = $sowing_method;
			$this->plant_distance = $plant_distance;
			$this->row_width = $row_width;
			$this->plants_per_10m = $plants_per_10m;
			$this->germination = $germination;
			$this->time_to_transplant = $time_to_transplant;
			$this->time_to_harvest = $time_to_harvest;
			$this->harvest_indicator = $harvest_indicator;
			$this->other = $other;
		}

		public function all() {
			$db = Db::getInstance();
			$list = [];
			$req = $db->query('SELECT * FROM crop_details');
			foreach($req->fetchAll() as $crop_detail) {
				$list[] = new CropDetail($crop_detail['id'], $crop_detail['crop_id'], $crop_detail['name_common'], $crop_detail['name_scientific'], $crop_detail['months_to_plant'], $crop_detail['edible_part'], $crop_detail['root_depth'], $crop_detail['sowing_method'], $crop_detail['plant_distance'], $crop_detail['row_width'], $crop_detail['plants_per_10m'], $crop_detail['germination'], $crop_detail['time_to_transplant'], $crop_detail['time_to_harvest'], $crop_detail['harvest_indicator'], $crop_detail['other']);
			}
			return $list;
		}
		
		public function find($id) {
			$db = Db::getInstance();
			$sql = 'SELECT * FROM crop_details WHERE id=' . $id .';';
			$req = $db->query($sql);
			$crop_detail = $req->fetch();
			return new CropDetail($crop_detail['id'], $crop_detail['crop_id'], $crop_detail['name_common'], $crop_detail['name_scientific'], $crop_detail['months_to_plant'], $crop_detail['edible_part'], $crop_detail['root_depth'], $crop_detail['sowing_method'], $crop_detail['plant_distance'], $crop_detail['row_width'], $crop_detail['plants_per_10m'], $crop_detail['germination'], $crop_detail['time_to_transplant'], $crop_detail['time_to_harvest'], $crop_detail['harvest_indicator'], $crop_detail['other']);
		}
		
		public function remove($crop_id) {
			$db = Db::getInstance();
			$sql = 'DELETE FROM crop_details WHERE crop_id=' . $crop_id .';';
			try {
				$db->exec($sql);
			} catch(PDOException $e) {
				echo '<h1>Error in query:</h1>';
				echo '<p>' . $sql . '</p><p>' . $e->getMessage() . '</p>';
			}
		}
		
	public function update($crop_id,
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
							$other) {
			$db = Db::getInstance();
			$req = $db->query('SELECT * FROM crop_details WHERE crop_id=' . $crop_id);
			if (empty($req->fetch())) {
				$sql = "INSERT INTO crop_details (crop_id, name_common, name_scientific, months_to_plant, edible_part, root_depth, sowing_method, plant_distance, row_width, plants_per_10m, germination, time_to_transplant, time_to_harvest, harvest_indicator, other) ";
				$sql .= "VALUES (" . $crop_id . ", '" . $name_common . "', '" . $name_scientific . "', '" . $months_to_plant . "', '" . $edible_part . "', '" . $root_depth . "', '" . $sowing_method . "', '" . $plant_distance . "', '" . $row_width . "', '" . $plants_per_10m . "', '" . $germination . "', '" . $time_to_transplant . "', '" . $time_to_harvest . "', '" . $harvest_indicator . "', '" . $other . "') ";
			} else {			
				$sql = 'UPDATE crop_details SET ';
				$sql .= "name_common='" . $name_common . "', ";
				$sql .= "name_scientific='" . $name_scientific . "', ";
				$sql .= "months_to_plant='" . $months_to_plant . "', ";
				$sql .= "edible_part='" . $edible_part . "', ";
				$sql .= "root_depth='" . $root_depth . "', ";
				$sql .= "sowing_method='" . $sowing_method . "', ";
				$sql .= "plant_distance='" . $plant_distance . "', ";
				$sql .= "row_width='" . $row_width . "', ";
				$sql .= "plants_per_10m='" . $plants_per_10m . "', ";
				$sql .= "germination='" . $germination . "', ";
				$sql .= "time_to_transplant='" . $time_to_transplant . "', ";
				$sql .= "time_to_harvest='" . $time_to_harvest . "', ";
				$sql .= "harvest_indicator='" . $harvest_indicator . "', ";
				$sql .= "other='" . $other ."' ";
				$sql .= 'WHERE crop_id=' . $crop_id . ';';
			}
			try {
				$db->exec($sql);
			} catch(PDOException $e) {
				echo '<h1>Error in query:</h1>';
				echo '<p>' . $sql . '</p><p>' . $e->getMessage() . '</p>';
			}
		}
	}