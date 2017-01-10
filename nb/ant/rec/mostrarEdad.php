<?php
	echo "<head>
		<meta charset='UTF-8'>
		<link rel='stylesheet' type='text/css' href='css/estilos.css' media='screen' />
		</head>";
	if (isset($_POST['enviar'])) {
	/*if (isset($_POST['nombre']) && isset($_POST['edad'])){
	}
	*/
	echo "Bienvenido ".$_POST['nombre'].", cuya edad es ". $_POST['edad'];
	}
?>