<?php foreach($crops as $crop) { ?>
	<div class='crop'>
		<a class='btn-red-small' href='?controller=crops&action=remove&id=<?php echo $crop->id; ?>'>X</a>
		<a class='btn-green-small' href='?controller=crops&action=edit&id=<?php echo $crop->id; ?>'>Edit</a>
		<span class='crop-common-name'><?php echo $crop->common_name ?></span>
		<span class='crop-scientific-name'><?php echo $crop->scientific_name ?></span>
	</div>
<?php } ?>
<div><a href='?controller=pages&action=new_crop' class='btn-blue'>Cultivo Nuevo</a></div>