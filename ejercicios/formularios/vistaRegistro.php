<html>
	<head>
		<title></title>
	</head>
	<body>
		<!--
			Formulario para un currículum que incluya: lista de selección única, lista de selección múltiple, botón de validación,
			
		-->
		<form method="post" action="registro.php">
			<p>		
				Nombre	<input type="text" name="name">
				Apellido<input type="text" name="subname">
			</p>
			<p>	

				<b>¿Qué estudias?</b>
			<br/>
				<input name="CicloMedio" type="checkbox" value="CicloMedio"> Ciclo Medio
				<input name="CicloSuperior" type="checkbox" value="CicloSuperior"> Ciclo Superior
				<input name="Carrera" type="checkbox" value="Carrera"> Carrera
			</p>	
			<p>
				<b>Sexo</b>
			<br/>
				<input type="radio" name="sexo" value="Hombre">Hombre
				<input type="radio" name="sexo" value="Mujer">Mujer
			</p>
			<p>
			<label for="so"><b>Sistema operativo que mas usas<b></label>
			<br/>
				<select id="so" name="so">
					<option value="" selected="selected">- selecciona -</option>
					<option value="windows">Windows</option>
					<option value="mac">Mac</option>
					<option value="linux">Linux</option>
					<option value="otro">Otro</option>
				</select>
			<p>	
			<br/>
			<input type="submit" name="enviar"> 
			<input type="reset" name="reset" value="Borrar datos del formulario" >
		</form> 
	</body>
	<?php 
echo "<hr>";
			echo "<a href=\"vercodigo.php?src=registro.php\">ver codigo</a><br/>";	
			echo "<a href=\"indexFormulario.php\">volver</a><br/>";
	 ?>
</html>