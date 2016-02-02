<?php
	class Crop {
		public $id;
		public $common_name;
		public $scientific_name;
		public $harvet_time;
		public $months;
		public $details;
		
		public function __construct($id, $common_name, $scientific_name, $harvest_time, $months, $details) {
			$this->id = $id;
			$this->common_name = $common_name;
			$this->scientific_name = $scientific_name;
			$this->harvet_time = $harvest_time;
			$this->months = $months;
			$this->details = $details;
		}
		
		public function all() {
			$list = [];
			$db = Db::getInstance();
			$req = $db->query('SELECT * FROM crops ORDER BY common_name');
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
		
		public function find($id) {
			$db = Db::getInstance();
			$id = intval($id);
			$req = $db->prepare('SELECT * FROM crops WHERE id = :id');
			$req->execute(array('id' => $id));
			$crop = $req->fetch();
			return new Crop($crop['id'],
						    $crop['common_name'],
						    $crop['scientific_name'],
						    $crop['harvest_time'],
						    $crop['months'], 
						    $crop['details']);
		}
		
		public function add($common_name, $scientific_name, $harvest_time, $months, $details) {
			$details = str_replace("\n", "<br/>", $details);
			$db = Db::getInstance();
			$sql = 'INSERT INTO crops(id, common_name, scientific_name, time_to_harvest, months, details) ';
			$sql .= 'VALUES (NULL, "' . $common_name . '", "' . $scientific_name . '", ' . $harvest_time . ', "' . $months . '", "' . $details . '");';
			try {
				$db->exec($sql);
			} catch(PDOException $e) {
    			echo '<h1>Error in query:</h1>';
				echo '<p>' . $sql . '</p><p>' . $e->getMessage() . '</p>';
    		}
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
		}
	}