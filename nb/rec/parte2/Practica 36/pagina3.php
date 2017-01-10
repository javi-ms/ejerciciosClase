<?php
	session_start();
/*
Confeccionar un formulario que solicite ingresar el mail de un alumno. Si el mail existe en la tabla
		ALUMNOS, rescatar su nombre y almacenarlo en una variable de sesion. Ademas disponer un
		hipervinculo a una tercera pagina que verifique si existe la variable de sesion y de la bienvenida al
		alumno, en caso contrario mostrar un mensaje indicando que no puede visitar esta pagina (para saber
		si una variable de sesion esta definida llamamos a la funcion isset).
		If (isset($_SESION[‘nombre’])) ....
*/
	if (!isset($_SESSION['name'])) {
		echo "esto no funca";
	}else{
		echo "esto funca";
	}
?>