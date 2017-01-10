<?php
	session_start();
	//inicializamos una variable de session que va a ser un array indexado asociativo
	//dentro de $_SESSION va su nombre entre corchetes
	if (!isset($_SESSION['agentes'])) {
		$_SESSION['agentes']=array();
	}
	if (!isset($_SESSION['login'])) {
		$_SESSION['login']=false;
	}
	if (!isset($_SESSION['multas'])) {
		$_SESSION['multas']=array();
	}
	//$agentes=array();

	//LOGIN
	$userLogin="";
	$passLogin="";
	$perfil="";
	function userAdmin($user,$pass, $perfil){

		if ($user == 'admin' && $pass=='admin' && $perfil='Admin') {
			$_SESSION['login']='admin';
			
			print_r($_SESSION['login']);		
		}
	}
	function userUsuario($user,$pass,$perfil){
		if ($user == 'usuario' && $pass=='usuario' && $perfil='Agente') {
			$_SESSION['login']='agente';
			header('Location:agentes.php');
			print_r($_SESSION['login']);
		}
		//logaut: usar unset para sacar al usuario
		//comprobar la session y si no esta ponerla como perfil invitado
	}	

	//REGISTRO DE AGENTES
	$usuario="";
	$pass="";
	$passR="";
	$nombre="";

	//Añadir Agentes
	function anadirAgentes($usuario, $pass, $passR, $nombre){
		
		if (!isset($_POST['agregar'])) {
			echo "No se ha podido agregar el usuario";
		}else{
			$_SESSION['agentes'][]=array('usuario'=>$usuario,'pass'=>$pass, 'passR'=>$passR, 'nombre'=>$nombre);
			//print_r($_SESSION['agenda'][]=array('usuario'=>$usuario,'pass'=>$pass, 'passR'=>$passR, 'nombre'=>$nombre));
		}
	}
	
	//REGISTRO DE MULTAS

	$matricula="";
	$descripcion="";
	$fecha="";
	$importe="";

	function agregarMulta($matricula,$descripcion,$fecha,$importe){
		if (!isset($_POST['registrar'])) {
			echo "No se ha podido añadir";
		}else{
			$_SESSION['multas'][]=array('matricula'=>$matricula,'descripcion'=>$descripcion,'fecha'=>$fecha,'importe'=>$importe);
			//print_r($_SESSION['multas'][]=array('matricula'=>$matricula,'descripcion'=>$descripcion,'fecha'=>$fecha,'importe'=>$importe));
		}

	}
	 function mostrarMultas(){
	 	echo "<table border='1'>";
		echo "<form method='POST' action='#'>";
			echo "<tr>
					<th>Matricula</th>
					<th>Descripcion</th>
					<th>Fecha</th>
					<th>Importe</th>
				</tr>
				";
	 	foreach ($_SESSION['multas'] as $key => $value) {
	 		echo "<tr>";
	 		foreach ($value as $key2 => $value2) {
	 			echo "<td>$value2</td>";
	 		}
	 		echo "<td><a href='<?php echo 'index.php?page=/modificarUser'; ?>Modificar</a></td>";
	 		echo "</tr>";
	 	}
	 	echo "</table>";

	 }

	function mostrarAgentes(){
		echo "<table border='1'>";
		echo "<form method='POST' action='#'>";
			echo "<tr>
					<th>Usuario</th>
					<th>Password</th>
					<th>Password repetida</th>
					<th>Nombre</th>
				</tr>
				";
			foreach ($_SESSION['agentes'] as $key => $value) {
			echo "<tr>";
				foreach ($value as $key2 => $value2) {
					
					echo "<td>$value2</td>";					
				}
				//
				echo "<td><a href='modulos/modificarUser.php?id=$key'>Modificar</a></td>";
				//echo "<td><input type='submit' name='eliminar' value='eliminar'></td>";
			echo "</tr>";	
			}
		echo "<form>";	
		echo "</table>";
	}

	function logaout(){
		if (isset($_POST['exit'])) {
			$_SESSION['login']='invitado';
			header('Location:index.php');
		}
	}
 ?>