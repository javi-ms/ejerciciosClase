<?php 
	if (isset($_POST['sentLogin'])) {
		echo "hola";
	}

	if (isset($_POST['sentLogin'])) {
		$user=$_POST['nameLogin'];
		$pass=$_POST['passLogin'];
		$perfil=$_POST['perfil'];
		
		echo "<table>";
		if ($user == 'admin' && $pass=='admin' && $perfil=='Admin') {
			userAdmin($user,$pass, $perfil);

		}elseif ($user == 'usuario' && $pass=='usuario'&& $perfil=='Agente') {
			userUsuario($user,$pass, $perfil);

		}elseif ($user == '' && $pass=='') {
			//header('Location: index.php');
			echo "no has introducido datos";
		}else{
			echo "los datos introducidos son incorrectos";
		}
	}
?>
<?php 
	if (isset($_POST['login'])) {
		$name = $_POST['name'];
		$pass= $_POST['pass'];
		if ($name ='admin' && $pass='admin') {
			echo "has entrado como admin";
		}
	}

?>