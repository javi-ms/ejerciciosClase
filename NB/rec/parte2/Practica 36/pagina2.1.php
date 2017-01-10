<?php
	/**
		Confeccionar un formulario que solicite ingresar el mail de un alumno. Si el mail existe en la tabla
		ALUMNOS, rescatar su nombre y almacenarlo en una variable de sesion. Ademas disponer un
		hipervinculo a una tercera pagina que verifique si existe la variable de sesion y de la bienvenida al
		alumno, en caso contrario mostrar un mensaje indicando que no puede visitar esta pagina (para saber
		si una variable de sesion esta definida llamamos a la funcion isset).
		If (isset($_SESION[‘nombre’])) ....
	*/
	if (isset($_POST['enviar'])) {
		//conexion a phpmyadmin
		$dp = mysql_connect("localhost", "root", "usuario" );
		//selecion de la bbdd
		mysql_select_db("clase", $dp);
		$mail=$_POST['mail'];
		print_r($_POST['mail']);
		//selecion de la tabla
		$sql = "SELECT count(*) FROM alumnos where alumnos.email = '".$mail."'" ;
		//no recogia como variable
		$resultado = mysql_query($sql);
			echo"	<h1>Mostrar Nombres de la Clase. BD </h1>";
			
		print_r(mysql_fetch_assoc($resultado));
		print_r($resultado);
		mysql_close($dp);
/*
		if (isset($_POST['mail']==$row['mail'])) {
			echo $_POST['mail'];
		}
		*/
	}
?>