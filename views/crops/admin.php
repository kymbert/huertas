<?php foreach($crops as $crop) { ?>
	<div class='crop'>
		<a class='btn-red-small' href='?controller=crops&action=remove&id=<?php echo $crop->crop_id; ?>'>&nbsp;X&nbsp;</a>
		<a class='btn-green-small' href='?controller=crop_details&action=edit&id=<?php echo $crop->id; ?>'>Editar</a>
		<span class='crop-common-name'><?php echo $crop->name_common ?></span>
		<span class='crop-scientific-name'><?php echo $crop->name_scientific ?></span>
	</div>
<?php } ?>
<div><a href='?controller=pages&action=new_crop' class='btn-blue'>Cultivo Nuevo</a></div>