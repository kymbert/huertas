<?php
	class Crop {
		public $id;
		public $region;
		public $time_to_havest;
		public $transplant;
		
		public function __construct($id, $region, $time_to_harvest, $transplant) {
			$this->id = $id;
			$this->region = $region;
			$this->time_to_harvest = $time_to_harvest;
			$this->transplant = $transplant;
		}
		
		public function all() {
			$list = [];
			$db = Db::getInstance();
			$req = $db->query('SELECT * FROM crops');
			foreach($req->fetchAll() as $crop) {
				$list[] = new Crop($crop['id'], $crop['region'], $crop['time_to_harvest'], $crop['transplant']);
			}
			return $list;
		}
		
		public function find($id) {
			$db = Db::getInstance();
			$sql = 'SELECT * FROM crops WHERE id=' . $id . ';';
			$req = $db->query($sql);
			$crop = $req->fetch();
			return new Crop($crop['id'], $crop['region'], $crop['time_to_harvest'], $crop['transplant']);
		}
		
		public function add($region, $harvest_time, $transplant) {
			$db = Db::getInstance();
			$sql = 'INSERT INTO crops(id, region, harvest_time, transplant) ';
			$sql .= 'VALUES (NULL, ' . $region . ', ' . $harvest_time . ', ' . $transplant . ');';
			try {
				$db->exec($sql);
			} catch(PDOException $e) {
				echo $sql . '\n';
				echo $e->getMessage();
			}
			$req = $db->query('SELECT MAX(id) FROM crops;');
			return $req->fetch();
		}
		
		public function remove($id) {
			$db = Db::getInstance();
			$sql = 'DELETE FROM crops WHERE id=' . $id . ';';
			try {
				$db->exec($sql);
			} catch(PDOException $e) {
				echo '<h1>Error in query:</h1>';
				echo '<p>' . $sql . '</p><p>' . $e->getMessage() . '</p>';
			}
			CropDetail::remove($id);
		}
		
		public function search($month, $harvest_time) {
			$list = [];
			$db = Db::getInstance();
			$sql = "SELECT * FROM crops WHERE months LIKE '%" . $month . "%' AND time_to_harvest=" . $harvest_time . " ORDER BY common_name;";
			$req = $db->query($sql);
			foreach($req->fetchAll() as $crop) {
				$list[] = new Crop($crop['id'],
						$crop['common_name'],
						$crop['scientific_name'],
						$crop['harvest_time'],
						$crop['months'],
						$crop['details']);
			}
			return $list;
		}
		
		public function update($id, $common_name, $scientific_name, $harvest_time, $months, $details) {
			$details = str_replace("\n", "<br/>", $details);
			$db = Db::getInstance();
			$sql = "UPDATE crops SET common_name='" . $common_name . "', scientific_name='" . $scientific_name . "', time_to_harvest='" . $harvest_time . "', months='" . $months . "', details='" . $details . "' ";
			$sql .= 'WHERE id=' . $id;
			try {
				$db->exec($sql);
			} catch(PDOException $e) {
				echo '<h1>Error in query:</h1>';
				echo '<p>' . $sql . '</p><p>' . $e->getMessage() . '</p>';
			}
		}
	}