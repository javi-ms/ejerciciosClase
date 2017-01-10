<?php
/*hay que mostrar los enlaces individuales*/
session_start();

//creamos variables de session

if (!isset($_SESSION['user'])) {
	$_SESSION['user']='invitado';
	$_SESSION['usReg']=array();
	$_SESSION['urlUser']=array();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form>
			<table >
				<tr>
					<td>	
						Usuario<input type="text" name="user" value="" />
					</td>
					<td>
						Password<input type="password" name="pass" value="" />
					</td>
				</tr>
				<tr>
					<td align="right">
						<input type="submit" name="login" value="login"  />
					</td>
				</tr>
				<tr>
					<td>
						<a href="registro.php">Registro</a>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>