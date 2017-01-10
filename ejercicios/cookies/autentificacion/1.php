<?php 
//Implementa un sistema de autentificación básico utilizando un formulario.
session_start();

	if (!isset($_SESSION['auth'])) {
		$_SESSION['auth']=false;
	}
		elseif(isset($_SESSION['auth']) && $_SESSION['auth']==true){
			echo "te has logeado correctamente";
		
		}

		if (isset($_POST['enviar']) && $_POST['user']=='user' && $_POST['pass']=='pass') {
			$_SESSION['auth']=true;	
			print_r($_SESSION['auth']);
			
		}
		
	else{
		if ($_SESSION['auth']==false) {
		
	echo "<form method='POST' action='1.php'>
				<input type='text' name='user'>
				<input type='text' name='pass'>
				<input type='submit' name='enviar'>
		</form>";
		}
	}
?>