<?php
	function call($controller, $action) {
		require_once('controllers/' . $controller . '_controller.php');
	
		switch($controller) {
			case 'pages':
				$controller = new PagesController();
				break;
			case 'crops':
				require_once 'models/crop.php';
				require_once 'models/crop_detail.php';
				$controller = new CropsController();
				break;
			case 'crop_details':
				require_once 'models/crop_detail.php';
				$controller = new CropDetailsController();
				break;
			case 'select':
				require_once 'models/crop_detail.php';
				$controller = new SelectController();
				break;
		}
	
		$controller->{ $action }();
	}
	
	$controllers = array('pages' => ['home', 'new_crop', 'select_crops', 'error'],
						 'crops' => ['list_all', 'admin', 'add', 'remove'],
						 'crop_details' => ['display', 'edit', 'update'],
						 'select' => ['region', 'month', 'transplant', 'harvest_time', 'results']);
	
	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('pages', 'error');
		}
	} else {
		call('pages', 'error');
	}