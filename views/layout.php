<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='css/pagestyle.css' />
</head>
<body>
	<div id='container'>
	<header>
		<h1>Tené tu huerta</h1>
		<div id='nav'>
			<a href='?controller=pages&action=home'>Comenzando</a>
			<a href='?controller=crops&action=index'>Los Cultivos</a>
			<a href='?controller=crops&action=admin'>Admin</a>
		</div>
	</header>
	<div id='content'>
	<?php require_once 'routes.php'; ?>
	</div>
	<footer>
		Copyright © 2016 by INGES
	</footer>
	</div>
</body>
</html>