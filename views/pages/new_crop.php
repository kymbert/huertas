<div>
<form id='add-crop' action='?controller=crops&action=add' method='POST'>
	<p>Región: <select name='region'>
					<?php foreach($regions as $region) {
						echo '<option value=' . $region['id'] . '>' . $region['name'] . '</option>';
					}?>
			</select></p>
	<p>Tiempo de cosecha: <select name='harvest_time'>
					<?php foreach($harvest_times as $time) {
						echo '<option value=' . $time['id'] . '>' . $time['string_es'] . '</option>';
					}?>
			</select></p>
	<p>¿Para preparar almacigos y trasplantar?</p>
	<p><input type='checkbox' value='true' name='transplant' class='radio' id='transplant' />
		<label for='transplant'>Si</label></p>
	<p><input type='submit' value='siguiente' id='new-crop-submit' class='btn-blue' /></p>
</form>
</div>