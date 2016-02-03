<div>
<form id='edit-crop' action='?controller=crops&action=update_crop' method='post'>
	<p><input type='text' name='id' value='<?php echo $crop->id ?>' readonly hidden=true /></p>
	<p>Nombre común: <input type='text' name='common-name' value='<?php echo $crop->common_name; ?>' /></p>
	<p>Nombre científico: <input type='text' name='scientific-name' value='<?php echo $crop->scientific_name; ?>'/></p>
	<p>Tiempo de cosecha: <select name='harvest-time'>
						<option value=1>Menos de 90 días</option>
						<option value=2>90 a 150 días</option>
						<option value=3>Mas de 150 días</option>
					</select></p>
	<p>Meses en que se planta: <input type='text' name='months' value='<?php echo $crop->months; ?>'/></p>
	<p>Detalles:</p><textarea rows="15" cols="50" form='edit-crop' name='details'><?php echo $crop->details; ?></textarea>
	<p><input type='submit' value='enviar' class='btn-blue' /></p>
</form>
</div>