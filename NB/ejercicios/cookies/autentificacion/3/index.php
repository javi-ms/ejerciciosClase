
<?php
	session_start();
	require_once('funciones.php');

	if (!isset($_SESSION['auth'])) {
		$_SESSION['auth']=false;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Practica 3 autentificación</title>
	<!--
	Desarrolla un sistema de registro y autentificación que incluya distintos perfiles de usuarios. Crea un menú de opciones y páginas correspondientes en función del perfil.
	-->
</head>
<body>
	<form method="POST" action="index.php">
		<input type="text" name="user">
		<input type="text" name="pass">
		<input type="submit" name="send">		
	</form>
</body>
</html>
<?php 
	if (isset($_POST['send'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
		echo "<table>";
		if ($user == 'admin' && $pass=='admin') {
			userAdmin($user,$pass);
			/*$_SESSION['auth']='admin';
			echo "<tr>
					<td>Perfil</td>
					<td>Añadir usuario</td>			
			</tr>";
			echo "te has logeado correctamente como Admin";
			echo "</table>";
			//print_r($_SESSION['auth']);*/
		}elseif ($user == 'usuario' && $pass=='usuario') {
			userUsuario($user,$pass);
			/*$_SESSION['auth']='user';
			echo "<tr>
					<td>Perfil</td>
					<td>añadir post</td>			
			</tr>";
			echo "<table>";
			print_r($_SESSION['auth']);*/
		}elseif ($user == '' && $pass=='') {
			//header('Location: index.php');
			echo "no has introducido datos";
		}else{
			echo "los datos introducidos son incorrectos";
		}
	}
?>