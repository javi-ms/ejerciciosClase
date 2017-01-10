<?php
	/**
		Confeccionar un formulario que solicite ingresar el mail de un alumno. Si el mail existe en la tabla
		ALUMNOS, rescatar su nombre y almacenarlo en una variable de sesion. Ademas disponer un
		hipervinculo a una tercera pagina que verifique si existe la variable de sesion y de la bienvenida al
		alumno, en caso contrario mostrar un mensaje indicando que no puede visitar esta pagina (para saber
		si una variable de sesion esta definida llamamos a la funcion isset).
		If (isset($_SESION[‘nombre’])) ....
	*/
	session_start();
	$_SESSION['name']="";
	if (isset($_POST['enviar'])) {
		//conexion a phpmyadmin
		$dp = mysqli_connect("localhost", "root", "usuario", "clase" );
		//selecion de la bbdd
		/*mysql_select_db("clase", $dp);*/
		$mail=$_POST['mail'];
		print_r($_POST['mail']." dato introducido");

	/* comprobar la conexión */
	if ($dp->connect_errno) {
	    printf("Falló la conexión: %s\n", $dp->connect_error);
	    exit();
	}
	$ConsultaMySql= $dp->query("SELECT * from alumnos where email='$mail'");

	while($columna = mysqli_fetch_array($ConsultaMySql)){
	    echo "<br/>".$columna["nombre"]." ";
	    $_SESSION['name']=$columna['nombre'];
	    print_r("<br/>".$_SESSION['name']." nombre de session");
	}  

	/* Consultas de selección que devuelven un conjunto de resultados */
	//$que=mysqli_query($dp,"SELECT nombre FROM alumnos where email=$mail");
		//$la = mysqli_fetch_assoc($que);
	//	print_r($que);
	//cerrar session
	echo "<a href='cerrarSesion.php'>pruebacerrar</a>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
	</head>
	<body>
	<br/>
		<a href="pagina3.php">pagina3</a>
	</body>
</html>