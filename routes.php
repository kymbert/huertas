<?php
	function call($controller, $action) {
		require_once('controllers/' . $controller . '_controller.php');
	
		switch($controller) {
			case 'pages':
				$controller = new PagesController();
				break;
			case 'crops':
				require_once('models/crop.php');
				$controller = new CropsController();
				break;
		}
	
		$controller->{ $action }();
	}
	
	$controllers = array('pages' => ['home', 'new_crop', 'error'],
						 'crops' => ['index', 'admin', 'detail', 'add', 'remove']);
	
	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('pages', 'error');
		}
	} else {
		call('pages', 'error');
	}