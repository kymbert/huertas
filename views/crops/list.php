<?php
if (empty($crop_details)) {
	echo '<div><p>No hay cultivos para tu selección.</p>';
	echo "<p><a href='?controller=select&action=region' class='btn-blue'>Volver al Inicio</a></p></div>";
	return;
}
?>
<?php foreach($crop_details as $crop) { ?>
	<div class='crop'>
		<span class='crop-common-name'><?php echo $crop->name_common ?></span>
		<span class='crop-scientific-name'><?php echo $crop->name_scientific ?></span>
		<a class='btn-blue-small' href='?controller=crop_details&action=display&id=<?php echo $crop->id; ?>'>Detalles</a>
	</div>
<?php } ?>