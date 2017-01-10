	<html>
	<head>
	<!--Formulario para un currículum que incluya:casilla de verificación, lista de selección múltiple, botón de validación, 
		botón de imagen, botón de resetFormulario para un currículum que incluya: Campos de texto,  grupo de botones de opción, 
		casilla de verificación, lista de selección única, lista de selección múltiple, botón de validación, 
		botón de imagen, botón de reset-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<form action="mostrarCurriculum.php" method="post">
		<div>
			<p>Nombre<input type="text" name="nombre"/></p>
			<p>
				Apellido1<input type="text" name="apellido1"/>
				Apellido2<input type="text" name="apellido2"/>
			</p>
		</div>
			<p>Año de nacimiento
				<select id="anio" name="anho">
					<option value="" selected="selected">- selecciona -</option>
					<?php
						for ($fechaNac=1981; $fechaNac < 2010; $fechaNac++) { 
							echo '<option value="'.$fechaNac.'">';
							echo $fechaNac;
							echo '</option>';
						}
					?>
					<option value="OTRO">Otro</option>
				</select>
			</p>

			<div>
				<p>Tipo B</p>
				<p>
					<input type="checkbox" name="clase[]" value="B"/>B
					<input type="checkbox" name="clase[]" value="BTP"/>BTP
				</p>
				
				<p>Tipo C</p>
					<input type="checkbox" name="clase[]" value="C1"/>C1
					<input type="checkbox" name="clase[]" value="C1+E"/>C1+E
				<p>Tipo D</p>
					<input type="checkbox" name="clase[]" value="D1"/>D1
					<input type="checkbox" name="clase[]" value="D1+1"/>D1+E
			</div>

			<p>Foto<input type="file" name="imagenAdj"/></p>

			<div>
				<input type="radio" name="estadolegal" value="Soltero" />Soltero
				<input type="radio" name="estadolegal" value="Casado" />Casado
				<input type="radio" name="estadolegal" value="Divorciado" />Divorciado
			</div>
			<br />
			<input type="submit" name="enviar" value="enviar	">
			<input type="reset" value="reset" />
		</form>
		<?php
		echo "<br/><a href=\"vercodigo.php?src=curriculum.php\">ver codigo</a>"
		?>
	</body>

</html>