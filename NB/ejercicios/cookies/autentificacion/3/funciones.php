<?php 
	function userAdmin($user,$pass){
		echo "<table>";
		if ($user == 'admin' && $pass=='admin') {
			$_SESSION['auth']='admin';
			echo "<tr>
					<td>Perfil</td>
					<td>Añadir usuario</td>			
			</tr>";
			echo "te has logeado correctamente como Admin";
			echo "</table>";
			//print_r($_SESSION['auth']);		
		}
	}
	function userUsuario($user,$pass){
		if ($user == 'usuario' && $pass=='usuario') {
			$_SESSION['auth']='user';
			echo "<tr>
					<td>Perfil</td>
					<td>añadir post</td>			
			</tr>";
			echo "<table>";
			//print_r($_SESSION['auth']);
		}
		//logaut: usar unset para sacar al usuario
		//comprobar la session y si no esta ponerla como perfil invitado
	}	
?>