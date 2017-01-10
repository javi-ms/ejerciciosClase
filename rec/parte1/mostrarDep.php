<?php
	echo "<head>
		<meta charset='UTF-8'>
		<link rel='stylesheet' type='text/css' href='css/estilos.css' media='screen' />
		</head>";
	if (isset($_POST['enviar'])) {
	/*if (isset($_POST['nombre']) && isset($_POST['edad'])){
	}
	*/
		echo "Bienvenido ".$_POST['nombre'].", cuyas aficiones son: ";
		if (isset($_REQUEST['futbol'])){
	    	echo "futbol, ";
	  	}
	  	if (isset($_REQUEST['tennis'])){
	    	echo "tennis, ";
	  	}
	  	if (isset($_REQUEST['basket'])){
	    	echo "basket, ";
	  	}
	  	if (isset($_REQUEST['voley'])){
	    	echo "voley, ";
	  	}

	}
?>