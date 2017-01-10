<?php
	session_start();
	//inicializamos una variable de session que va a ser un array indexado asociativo
	//dentro de $_SESSION va su nombre entre corchetes
	if (!isset($_SESSION['paises'])) {
		$_SESSION['paises']=array();
	}
	$paises=array();
	
	echo "
		<form method='post' action=$_SERVER[PHP_SELF]>
			<input type='text' name='pais'>
			<input type='text' name='capital'>
			<input type='submit' name='enviar' value='enviar'>
			<input type='submit' name='borrar' value='borrar sesion'>
		</form>";

		if (isset($_POST['enviar'])) {
			$pais=$_POST['pais'];
			$capital=$_POST['capital'];
			//array indexado asociativo, aqui se añaden
			$_SESSION['paises'][]=array('pais'=>$pais,'capital'=>$capital);
			print_r($_SESSION['paises']);	
		}
		echo "<table>";
				echo "<tr>
						<th>Pais</th>
						<th>Capital</th>
					</tr>
					";
				foreach ($_SESSION['paises'] as $key => $value) {
				echo "<tr>";
					foreach ($value as $key2 => $value2) {
						echo "<td>$value2</td>";
					}
				echo "</tr>";	
				}
			echo "</table>";
			if (isset($_POST['borrar'])) {
				session_unset();
				session_destroy();
			}

?>