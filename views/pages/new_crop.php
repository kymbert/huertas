<form id='add-crop' action='?controller=crops&action=add' method='POST'>
	<p>Nombre común: <input type='text' name='common-name' /></p>
	<p>Nombre científico: <input type='text' name='scientific-name' /></p>
	<p>Tiempo de cosecha: <select name='harvest-time'>
						<option value=1>Menos de 90 días</option>
						<option value=2>90 a 150 días</option>
						<option value=3>Mas de 150 días</option>
					</select></p>
	<p>Meses en que se planta: <input type='text' name='months' /></p>
	<p>Detalles:</p><textarea rows="24" cols="50" form='add-crop' name='details'></textarea>
	<p><input type='submit' value='enviar' id='new-crop-submit' /></p>
</form>