<div>
<form id='select-transplant' action='?controller=select&action=harvest_time' method='POST'>
	<p>¿Vas a preparar almacigos y trasplantar?</p>
	<p><input type='radio' name='transplant' value='true' id='yes' class='radio' checked='checked'><label for='yes'>Si</label></p>
	<p><input type='radio' name='transplant' value='false' id='no' class='radio'><label for='no'>No</label></p>
	<input type='hidden' name='region' value='<?php echo $region ?>' />
	<input type='hidden' name='month' value='<?php echo $month ?>' />
	<input type='submit' value='siguiente' />
</form>
</div>