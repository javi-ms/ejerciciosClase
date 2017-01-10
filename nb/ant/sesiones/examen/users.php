<?php
	//creacion de los usuarios 
	$users=array("admin"=>"admin", "usuario"=>"ususario");

	if (isset($_POST["login"])) {
		//si en el array esta el usuario y la contraseña
		if (in_array($_POST["user"], $users) && in_array($_POST["pass"], $users)) {
			include('preguntas.php');
		}else{
			echo "vete a tomar por culo";
		}
	}else{
		echo "vete a tomar por saco";
	}
?>