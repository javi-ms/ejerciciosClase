<html>
	<head>

	</head>
	<body>
		<form action='#' method='post'>
			<input type="text" name="user">
			<input type="password" name="pass">
			<br/>
			<input type="submit" name="login" value="login">

		</form>
	</body>
</html>

<?php
	//creacion de los usuarios 
	$users=array("admin"=>"admin", "usuario"=>"ususario");

	if (isset($_POST["login"])) {
		//si en el array esta el usuario y la contraseña
		if (in_array($_POST["user"], $users) && in_array($_POST["pass"], $users)) {
			echo "usuario correcto";
		}else{
			echo "vete a tomar por culo";
		}
	}
?>