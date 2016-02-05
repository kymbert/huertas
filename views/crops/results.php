<?php
if (empty($crops)) {
	echo '<div><p>No results found for your selection.</p>';
	echo "<p><a href='?controller=pages&action=select_crops' class='btn-blue'>Volver al Inicio</a></p></div>";
	return;
}
?>
<?php foreach($crops as $crop) { ?>
	<div class='crop'>
		<span class='crop-common-name'><?php echo $crop->common_name ?></span>
		<span class='crop-scientific-name'><?php echo $crop->scientific_name ?></span>
		<a class='btn-blue-small' href='?controller=crops&action=detail&id=<?php echo $crop->id; ?>'>Detalles</a>
	</div>
<?php } ?>
<p><a href='?controller=pages&action=select_crops' class='btn-blue'>Volver al Inicio</a></p>