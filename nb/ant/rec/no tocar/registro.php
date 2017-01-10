<?php 
session_start();
	if (isset($_POST['registro'])) {
		header('Location: index.php');
	}
//te envia al index.php
	if (isset($_POST['cancelar'])) {
		header('Location: index.php');
	}
	if (isset($_POST['comprobar'])) {
		print_r($_SESSION['usReg']);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method='POST' action="regUsuario.php">
			<table>
			 	<tr>
			 		<td>
					 	Usuario<input type="text" name="user">
					 	Password<input type="password" name="pass">
					 	<!--Repetir Password<input type="password" name="pass" value="pass">-->
			 		</td>	
			 	</tr>
			 	<tr>	
			 		<td>
					 	<input type="submit" name="registrar" value="registrar">
					 	<input type="submit" name="cancelar" value="cancelar">
					 	<input type="submit" name="comprobar" value="comprobar">
			 		</td>
			 	</tr>
			</table>
		</form>
	</body>
</html>