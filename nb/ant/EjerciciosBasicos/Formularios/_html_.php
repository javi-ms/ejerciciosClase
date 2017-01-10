<html>
	<head>
	<!--Formulario para un currículum que incluya:casilla de verificación, lista de selección múltiple, botón de validación, 
		botón de imagen, botón de resetFormulario para un currículum que incluya: Campos de texto,  grupo de botones de opción, 
		casilla de verificación, lista de selección única, lista de selección múltiple, botón de validación, 
		botón de imagen, botón de reset-->
	</head>
	<body>
		<form>
		<div>
			<p>Nombre<input type="text" name="nombre"/></p>
			<p>Apellido1<input type="text" name="apellido1"/>
			Apellido2<input type="text" name="apellido2"/></p>
		</div>>	
			<p>Año de nacimiento
				<select id="anio" name="anho">
					<option value="" selected="selected">- selecciona -</option>
					<option value="1981">1981</option>
					<option value="1982">1982</option>
					<option value="1983">1983</option>
					<option value="1984">1984</option>
					<option value="1985">1985</option>
					<option value="1986">1986</option>
					<option value="1987">1987</option>
					<option value="1988">1988</option>
					<option value="1989">1989</option>
					<option value="1990">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
					<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="OTRO">Otro</option>
				</select>
			</p>

			<div>
				<input type="checkbox" name="casilla" />Casilla 1
					<p>Tipo B</p>
					<p>
						<input type="checkbox"/>B
						<input type="checkbox"/>BTP
					</p>
					<p>Tipo C</p>
						<input type="checkbox"/>C1
						<input type="checkbox"/>C1+E
					<p>Tipo D</p>
						<input type="checkbox"/>D1
						<input type="checkbox"/>D1+E
			</div>	
			<p>Foto<input type="file" name="imagenAdj"/></p>
			<div>
				<input type="radio" name="estadolegal" />Soltero
				<input type="radio" name="estadolegal" />Casado
				<input type="radio" name="estadolegal" />Divorciado
			</div>
			<br />
			<input type="submit" value="Enviar	">
			<input type="reset" value="Borrar" />
		</form>
	</body>

</html>