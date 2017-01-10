<?php 

	if (isset($_POST['enviar'])) {
		//echo "has entrado en la pag<br/>";
		//si la cookie no esta creada
		//setcookie recarga autopmaticamente la pagina
		if (!isset($_COOKIE['user'])) {
			//creamos la cookie
			setcookie("user","usuario",time()+3600);

		}else{
			echo "La cookie es: ".$_COOKIE['user']."<br/>";
			//unset($_COOKIE["user"]);
			$name=$_POST['nameLogin'];
			$pass=$_POST['passLogin'];
			if ($name=="javier" && $pass="usuario") {
				echo "Se ha logeado correctamente<br/>";
				echo "<form method='post' action='#'>
						<input type='submit' name='cerrar'>
					</form>";
					if (isset($_POST['cerrar'])) {
						setcookie("user","",time()-3600);				
					}
			}else{
				echo "no te has logeado correctamente";
			}
		/*	if (isset($_COOKIE['user'])) {
					
			}*/
		}
	}
?>