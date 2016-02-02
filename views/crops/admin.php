<?php foreach($crops as $crop) { ?>
	<div class='crop'>
		<span class='crop-common-name'><?php echo $crop->common_name ?></span>
		<span class='crop-scientific-name'><?php echo $crop->scientific_name ?></span>
		<a class='delete-link' href='?controller=crops&action=remove&id=<?php echo $crop->id; ?>'>Delete</a>
	</div>
<?php } ?>
<a href='?controller=pages&action=new_crop' class='admin-btn'>Cultivo Nuevo</a>