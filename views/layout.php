<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='/css/pagestyle.css' />
</head>
<body>
	<div id='content'>
	<header>
		<h1>Tené tu huerta</h1>
		<div id='nav'>
			<a href='/'>Comenzando</a>
			<a href='/?controller=crops&action=index'>Los Cultivos</a>
			<a href='/?controller=pages&action=admin'>Admin</a>
		</div>
	</header>
	<?php require_once 'routes.php'; ?>
	<footer>
		Copyright © 2016 by INGES
	</footer>
	</div>
</body>
</html>