<?php
	$user=array("manu"=>1234, "javi"=>4586, "user3"=>7898, "user4"=>1478, "user5"=>8526);
	if (isset($_POST['enviar'])) {

		foreach ($user as $key => $value) {
				echo $key." con pass ". $value."<br/>";
				//echo $user[$key];
				//echo $user["javi"];
		}
//	print_r($user);
		/*
			if ($_POST['nombre']==$key) {
			# code...
		}
		*/
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
			<!--
				Crear un vector asociativo que almacena las claves de acceso de 5 usuarios de un sistema. Acceder a
				cada componente por su nombre. Imprimir un componente por cada vector.
			-->

		</title>
	</head>
	<body>
		<form action="#" method="POST">
		<!--
			usuario <input type="text" name="usuario">
			pasword <input type="password" name="pass">
			<br/>
			-->
			<input type="submit" name="enviar" value="enviar">
		</form>
	</body>
</html>