<?php 
	if (isset($crop)) {
		$id = $crop->crop_id;
		$name_common = $crop->name_common;
		$name_scientific = $crop->name_scientific;
		$edible_part = $crop->edible_part;
		$months = $crop->months_to_plant;
		$root_depth = $crop->root_depth;
		$sowing_method = $crop->sowing_method;
		$plant_distance = $crop->plant_distance;
		$row_width = $crop->row_width;
		$plants_per_10m = $crop->plants_per_10m;
		$germination = $crop->germination;
		$time_to_transplant = $crop->time_to_transplant;
		$time_to_harvest = $crop->time_to_harvest;
		$harvest_indicator = $crop->harvest_indicator;
		$other = $crop->other;
	} else if (isset($id)) {
		$id = $id[0];
		$name_common = '';
		$name_scientific = '';
		$edible_part = '';
		$months = '';
		$root_depth = '';
		$sowing_method = '';
		$plant_distance = '';
		$row_width = '';
		$plants_per_10m = '';
		$germination = '';
		$time_to_transplant = '';
		$time_to_harvest = '';
		$harvest_indicator = '';
		$other = '';
	}
?>
<div>
<form id='update-crop' action='?controller=crop_details&action=update' method='POST'>
	<input type='hidden' value='<?php echo $id ?>' name='crop_id' />
	<p>Nombre común: <input type='text' name='name_common' value='<?php echo $name_common ?>' /></p>
	<p>Nombre cientifico: <input type='text' name='name_scientific' value='<?php echo $name_scientific ?>' /></p>
	<p>Parte Comestible: <input type='text' name='edible_part' value='<?php echo $edible_part ?>' /></p>
	<p>Meses en que se planta: <input type='text' name='months' value='<?php echo $months ?>' /></p>
	<p>Profundidad de las raices: <input type='text' name='root_depth' value='<?php echo $root_depth ?>' /></p>
	<p>Forma de siembra: <input type='text' name='sowing_method' value='<?php echo $sowing_method ?>' /></p>
	<p>Distancia entre plantas: <input type='text' name='plant_distance' value='<?php echo $plant_distance ?>' /></p>
	<p>Distancia entre surcos: <input type='text' name='row_width' value='<?php echo $row_width ?>' /></p>
	<p>Plantas en surco de 10m: <input type='text' name='plants_per_10m' value='<?php echo $plants_per_10m ?>' /></p>
	<p>Germinacion: <input type='text' name='germination' value='<?php echo $germination ?>' /></p>
	<p>Edad para transplante: <input type='text' name='time_to_transplant' value='<?php echo $time_to_transplant ?>' /></p>
	<p>Tiempo para poder cosechar: <input type='text' name='time_to_harvest' value='<?php echo $time_to_harvest ?>' /></p>
	<p>Indicador para cosechar: <input type='text' name='harvest_indicator' value='<?php echo $harvest_indicator ?>' /></p>
	<p>Más: <input type='text' name='other' value='<?php echo $other ?>' /></p>
	<input type=submit value='enviar' />
</form>
</div>