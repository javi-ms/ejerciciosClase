<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<!--
		Confeccionar un formulario que solicite el ingreso del nombre de una persona y un combo de selección
		(en este ultimo permitir la selección de los ingresos anuales de la persona: 1-1000, 1001-3000, >3000).
		En la pagina que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si
		supera 3000).
		-->
	</head>

	<body>
		<form action="#" method="POST">
			Nombre <input type="text" name="nombre">
			Ingreso Anual <select name="ingresoAnual[]">
				<option value="1-1000">1-1000</option>
			    <option value="1001-3000">1001-3000</option>
			    <option value=">3000" selected="selected">>3000</option><!-- Esta opcion saldra pre-seleccionada -->
			</select>
			<br/>
			<input type="submit" name="enviar">
		</form>
		<?php
			if (isset($_POST['enviar'])) {
				echo $_POST['nombre'];


				//guardamos en una variable el array
				$anual=$_POST["ingresoAnual"];
				//recorremos el array, el cual sabra la posicion gracias a la variable creada anteriormente
				for ($i=0;$i<count($anual);$i++)    
				{     
				echo "<br> Ingreso Anual " 	. ": " . $anual[$i];    
				} 
			}
		?>
	</body>
</html>