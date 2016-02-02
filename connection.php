<?php
	class Db{
		private static $instance = NULL;
	
		private function __construct() {}
	
		private function __clone() {}
		
		public function getInstance() {
			if (!isset(self::$instance)) {
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				self::$instance = new PDO('mysql:host=localhost;dbname=huertas',
						'huertas_admin',
						'',
						$pdo_options);
			}
			return self::$instance;
		}
	}
