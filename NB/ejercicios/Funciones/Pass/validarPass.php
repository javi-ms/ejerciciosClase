<?php 
/*
Escribir una función que permita validar contraseñas seguras. Una contraseña segura tiene 
que tener una longitud mínima de 8 y contener al menos: Una letra minúscula, una letra 
mayúscula, un dígito y un carácter especial.

    Minimo 8 caracteres
    Maximo 15
    Al menos una letra mayúscula
    Al menos una letra minucula
    Al menos un dígito
    No espacios en blanco
    Al menos 1 caracter especial

*/
	$pass='';
	if (isset($_POST['enviar'])) {
		$pass = $_POST['pass'];

		$regexp_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/"	;
			if (preg_match($regexp_password, $pass)) {
				echo "Cumple las reglas";
			}else{
				echo "no las cumple";
			}
	}
	

?>