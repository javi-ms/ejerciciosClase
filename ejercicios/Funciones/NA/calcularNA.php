<?php
	//Escribir una función que lea nombre y apellidos y devuelva las iniciales.
	
	$Tname = '';
	$tSubname = '';

	function calcularLetras($nombre){
		//subste le indicas donde empieza y cuantas letras tiene que coger
		return substr($nombre, 0,3);
	}
	
	if (isset($_POST['enviar'])) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$tName = calcularLetras($nombre);
		$tSubname = calcularLetras($apellido);
	}
		echo $tName.$tSubname;
?>