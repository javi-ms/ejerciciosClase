<?php
		function igual($pass, $pass2){
			if ($pass==$pass2) {
				echo "iguales";
			}else{
				echo "distintas";
			}

		}
	if (isset($_POST['enviar'])) {
		echo "usuario ".$_POST['usuario']." con claves ";
		igual($_POST['pass'],$_POST['pass2']);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
			<!--
				Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos
				oportunidades. En la pagina que se procesan los datos del formulario implementar una funcion que
				imprima un mensaje si las dos claves ingresadas son distintas.	
			-->

		</title>
	</head>
	<body>
		<form action="#" method="POST">

			usuario <input type="text" name="usuario">
			pasword <input type="password" name="pass">
			pasword <input type="password" name="pass2">
			pasword <input type="submit" name="enviar" value="enviar">

		</form>
	</body>
</html>