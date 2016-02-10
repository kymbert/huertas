<div>
<form id='select-region' action='?controller=select&action=month' method='POST'>
	<p>¿Dónde va a plantar?</p>
	<p><select name='region'>
		<?php foreach($regions as $region) {
			echo '<option value=' . $region['id'] . '>' . $region['name'] . '</option>';
		}?>
	</select></p>
	<input type='submit' value='siguiente' />
</form>
</div>