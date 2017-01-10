<?php
	session_start();
	//inicializamos una variable de session que va a ser un array indexado asociativo
	//dentro de $_SESSION va su nombre entre corchetes
	if (!isset($_SESSION['agenda'])) {
		$_SESSION['agenda']=array();
	}
	$agenda=array();

	$usuario="";
	$tlf="";
	//menu
	//añadir usuario
	//modificar usuario
	function anadirUsuario($usuario,$tlf){
		//$usuario=$_POST['nombre'];
		//$tlf=$_POST['tlf'];
		
		if (!isset($_POST['agregar'])) {
			echo "No se ha podido agregar el usuario";
		}else{
			$_SESSION['agenda'][]=array('nombre'=>$usuario,'tlf'=>$tlf);
		}
	}

	function comprobarUsuario($usuario){

	}
	
	function mostrarAgendaIndex(){
		echo "<table border='1'>";
		echo "<form method='POST' action='#'>";
			echo "<tr>
					<th>Nombre</th>
					<th>Telefono</th>
				</tr>
				";
			foreach ($_SESSION['agenda'] as $key => $value) {
			echo "<tr>";
				foreach ($value as $key2 => $value2) {
					echo "<td>$value2</td>";
				}
				//
				echo "<td><a href='modulos/modificarUser.php?id=$key'>Modificar</a></td>";
				echo "<td><input type='submit' name='eliminar' value='eliminar'></td>";
			echo "</tr>";	
			}
		echo "<form>";	
		echo "</table>";
	}

	function mostrarAgendaAnadir(){
		echo "<table>";
			echo "<tr>
					<th>Nombre</th>
					<th>Telefono</th>
				</tr>";
			foreach ($_SESSION['agenda'] as $key => $value) {
			echo "<tr>";
				foreach ($value as $key2 => $value2) {
					echo "<td>$value2</td>";
				}
				echo "<td><a href='modificarUser.php?id=$key'>Modificar</a></td>";
				echo "<td><input type='submit' name='eliminar' value='eliminar'></td>";
			echo "</tr>";	
			}
		echo "</table>";
	}
	//MOSTRAR AGENDA MODIFICACION
	function mostrarAgendaMod(){
		echo "<table>";
		echo "<form method='POST' action='#'>";
			echo "<tr>
					<th>Nombre</th>
					<th>Telefono</th>
				</tr>";
			foreach ($_SESSION['agenda'] as $key => $value) {
			echo "<tr>";
				foreach ($value as $key2 => $value2) {
					echo "<td>$value2</td>";
				}
				echo "<td><a href='modificarUser.php?id=$key'>Modificar</a></td>";
				echo "<td><input type='submit' name='eliminar' value='eliminar'></td>";
			echo "</tr>";	
			}
			echo "</form>";
		echo "</table>";
	}
	/*function eliminarUsuarioMod($nombre){
		$nombre ="";
		$tlf="";
		//recogemos el id
		if (isset($_GET['id'])) {
			print_r( $_SESSION['agenda'][$_GET['id']]);	
			$usurio=$_SESSION['agenda'][$_GET['id']];
			$nombre=$usurio['nombre'];
			$tlf = $usurio['tlf'];
		}
		
		if (isset($_POST['eliminar'])) {
			$nombre=$_POST['modNombre'];
			$tlf=$_POST['modTlf'];
			unset($agenda[$nombre]);
		}
	}
	function eliminarUsuarioIndex(){
		$nombre ="";
		$tlf="";
		//recogemos el id
		if (isset($_GET['id'])) {
			print_r( $_SESSION['agenda'][$_GET['id']]);	
			$usurio=$_SESSION['agenda'][$_GET['id']];
			$nombre=$usurio['nombre'];
			$tlf = $usurio['tlf'];
		}
		
		if (isset($_POST['eliminar'])) {
			$nombre=$_POST['modNombre'];
			$tlf=$_POST['modTlf'];
			unset($agenda[$nombre]);
		}
	}*/

?>