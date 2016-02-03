<?php
if (empty($crops)) {
	echo 'No results found for your selection.';
	return;
}
?>
<?php foreach($crops as $crop) { ?>
	<div class='crop'>
		<span class='crop-common-name'><?php echo $crop->common_name ?></span>
		<span class='crop-scientific-name'><?php echo $crop->scientific_name ?></span>
		<a class='details-link' href='?controller=crops&action=detail&id=<?php echo $crop->id; ?>'>Detalles</a>
	</div>
<?php } ?>