<?php 
	if (isset($_POST['login'])) {
		$bandera = true;
		if (!isset($_POST['userLogin'])) {
			$bandera = false;
		}
		if (!isset($_POST['passLogin'])) {
			$bandera = false;
		}
		if ($bandera == true) {
			foreach ($_SESSION['usuariosRegistrados'] as $usuario) {
				if ($usuario['nameLogin']==$_POST['nameLogin'] && $usuario['passLogin'] == $_POST['passLogin']) {
					$_SESSION['usuarioLogeado']=$usuario;
						header('Location: $_SERVER[PHP_SELF]');	
				}
			}
		}
	}
?>

<div>
	<h3>Login</h3>

	<div>
		<form method='post' action="$_SERVER['PHP_SELF'].'?page=login'?>">
			<input type="text" name="userLogin">	
			<input type="password" name="passLogin">	
			<input type="text" name="login">	
		</form>

	</div>
</div>