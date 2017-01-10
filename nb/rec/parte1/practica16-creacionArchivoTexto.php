<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<!--
			Confeccionar un programita en PHP que permita hacer el pedido de pizzas via internet.
			El formulario debe ser:
			Nombre: [……………]
			Direccion: [……………]
			Jamon y queso [x]
			Cantidad […..]
			Napolitana [x]
			Cantidad […..]
			Mozzarella [x]
			Cantidad […..]
			[Confirmar]
			Para el ingreso del nombre, direccion y cantidad de pizzas de cada tipo disponer objetos de la clase
			“text”. Disponer tres objetos de tipo “check” para seleccionar los tipos de pizzas.
			Por ultimo disponer un boton para el envio de datos: “submit”.
			Grabar en un archivo de texto cada pedido, separados por una linea de puntos (obligatoriamente dar el
			nombre de texto como “datos.txt”, esto es para que no se llene el disco duro de archivos
		-->
	</head>

	<body>
		<form action="datos.txt" method="POST">
			Nombre <input type="text" name="nombre">
			Direccion <input type="text" name="direccion">
			Cantidad <input type="number" name="cantidad">
			<br/>
			Jamon y queso<input type="checkbox" name="jamonQueso">
			<br/>
			Napolitana<input type="checkbox" name="napolitana">
			<br/>
			Mozarella<input type="checkbox" name="mozarella">
			<br/>
			<input type="submit" name="enviar">
		</form>
		<?php
			if (isset($_POST['enviar'])) {
				echo "A nombre de ".$_POST['nombre'].", con calle ". $_POST['direccion']." se le repartiran ". $_POST['cantidad']." pizzas de ";
				if (isset($_REQUEST['jamonQueso'])){
			    	echo "Jamon y Queso, ";
			  	}
			  	if (isset($_REQUEST['napolitana'])){
			    	echo "Napolitana, ";
			  	}
			  	if (isset($_REQUEST['mozarella'])){
			    	echo "Mozarella, ";
			  	}
			}
		?>
	</body>
</html>