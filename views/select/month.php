<div>
<form id='select-month' action='?controller=select&action=transplant' method='POST'>
	<p>¿Cuándo va a empazar?</p>
	<p>
		<select name='month'>
			<option value='Enero'>Enero</option>
			<option value='Febrero'>Febrero</option>
			<option value='Marzo'>Marzo</option>
			<option value='Abril'>Abril</option>
			<option value='Mayo'>Mayo</option>
			<option value='Junio'>Junio</option>
			<option value='Julio'>Julio</option>
			<option value='Agosto'>Agosto</option>
			<option value='Septiembre'>Septiembre</option>
			<option value='Octubre'>Octubre</option>
			<option value='Noviembre'>Noviembre</option>
			<option value='Deciembre'>Deciembre</option>
		</select>
	</p>
	<input type='hidden' name='region' value='<?php echo $region ?>' />
	<input type='submit' value='siguiente' />
</form>
</div>