<div>
<form id='select-transplant' action='?controller=select&action=results' method='POST'>
	<p>¿Como estas de paciencia?</p>
	<p><select name='harvest_time'>
		<?php foreach($harvest_times as $time) {
			echo '<option value=' . $time['id'] . '>' . $time['string_es'] . '</option>';
		}?>
	</select></p>
	<input type='hidden' name='region' value='<?php echo $region ?>' />
	<input type='hidden' name='month' value='<?php echo $month ?>' />
	<input type='hidden' name='transplant' value='<?php echo $transplant ?>' />
	<input type='submit' value='¡A ver!' />
</form>
</div>