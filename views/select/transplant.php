<div>
<form id='select-transplant' action='?controller=select&action=harvest_time' method='POST'>
	<p>¿Vas a preparar almacigos y trasplantar?</p>
	<p><input type='radio' name='transplant' value='true' checked='checked'>&nbsp;Si</p>
	<p><input type='radio' name='transplant' value='false'>&nbsp;No</p>
	<input type='hidden' name='region' value='<?php echo $region ?>' />
	<input type='hidden' name='month' value='<?php echo $month ?>' />
	<input type='submit' value='siguiente' />
</form>
</div>