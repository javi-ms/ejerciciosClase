<?php 
	
	/*function comprobarIp(){
		$_SERVER['REMOTE_ADD'];

	}*/

	function cargarVariablesSesion(){
		if (!isset($_SESSION['usuariosRegistrados'])) {
			//usuario administrador
			$admin= array('username'=>'admin','password'=>'admin','role'=>'admin', 'validado'=>true);			
			//lista de usuarios registrados
			$_SESSION['usuariosRegistrados']=array();

			//añadimos el usuario administrador
			$_SESSION['usuariosRegistrados'][]=$admin;
		}

		if (!isset($_SESSION['usuarioLogueado'])) {
			//el usuario que esta logueado en la aplicacion
			$_SESSION['usuarioLogueado']="";
		}
		if (!isset($_SESSION['multas'])) {
			//Lista de multas	
			$_SESSION['multas']=array();
		}

	}
/*
Id: Identificador del agente. Se aconseja utilizar el índice numérico del array.
Usuario: Nombre de usuario.
Psw: Contraseña
Nombre: Nombre y apellidos del agente
Validado: True/False. Sólo se permite el acceso a la gestión de multas a los agentes confirmados
(Validado=True). El agente se registra con valor falso en este campo y es responsabilidad del
administrador cambiarlo.

*/
	$id="";
	$usuario="";
	$psw="";
	$nombre="";
	$validado="";

	function agregarAgente($id,$usuario,$psw,$psw2,$nombre,$validado){
		if ($psw!=$psw2) {
			echo "Las contraseñas no son iguales";
		}else{
			//$_SESSION['usuariosRegistrados'][]=array('idAgente'=>$id,'usuario'=>$usuario,'psw'=>$psw,'psw2'=>$psw2,'nombre'=>$nombre,'validado'=>$validado);
			$_SESSION['usuariosRegistrados'][]=array('idAgente'=>$id,'usuario'=>$usuario,'psw'=>$psw,'psw2'=>$psw2,'nombre'=>$nombre,'validado'=>false);
			print_r($_SESSION['usuariosRegistrados']);
		}

	}
	function mostrarAgentes(){

		echo "<table>";
			echo "<form method='POST' action='#'>";
				echo "<tr>
						<th>Id</th>
						<th>Usuario</th>
						<th>Pass</th>
						<th>pass2</th>
						<th>Nombre</th>
						<th>Validado</th>
					</tr>";
					
				foreach ($_SESSION['usuariosRegistrados'] as $key => $value) {
				echo "<tr>";
					foreach ($value as $key2 => $value2) {
						echo "<td>$value2</td>";
							/*if ($key2='validado'==false) {
								echo "el usuario no esta validado";	
							}else{
								echo "el usuario esta validado";
							}*/
					}
					//echo "<td><a href='modificarUser.php?id=$key'>Modificar</a></td>";
					//echo "<td><input type='submit' name='eliminar' value='eliminar'></td>";
				echo "</tr>";	
				}
			echo "</form>";
		echo "</table>";
		
	}

/*
Id: Identificador de la multa. Se aconseja utilizar el índice numérico del array.
IdAgente: Id del agente que impone la sanción.
Matrícula: Matrícula del vehículo que ha cometido la infracción.
Descripción: Breve descripción de la infracción.
Fecha: Fecha de la infracción. Por defecto se cargará la fecha actual.
Estado: Pendiente/Pagada. 
*/
	$idMulta="";
	$idAgente="";
	$matricula="";
	$descripcion="";
	$estado="";
	
	function agregarMulta($idMulta, $idAgente, $Matricula, $Descripcion, $Estado){
		$idMulta=$_POST[''];
		$idAgente=$_POST[''];
		$Matricula=$_POST[''];
		$Descripcion=$_POST[''];
		$Estado=$_POST[''];
		$_SESSION['multas'][]=array('IdMulta'=>$idMulta,'idAgente'=>$idAgente,'Matricula'=>$matricula,'Descripcion'=>$descripcion,'Estado'=>$estado);
		print_r($_SESSION['multas']);
	}
	function modificarMulta(){
		/*
		$idMulta=$_POST[''];
		$idAgente=$_POST[''];
		$Matricula=$_POST[''];
		$Descripcion=$_POST[''];
		$Estado=$_POST[''];
		*/
		if (isset($_GET['id'])) {
			print_r( $_SESSION['multas'][$_GET['id']]);	
			$idMulta=$_SESSION['multas'][$_GET['id']];
			$idAgente=$_POST[''];
			$Matricula=$_POST[''];
			$Descripcion=$_POST[''];
			$Estado=$_POST[''];
		}
	
		if (isset($_POST['modificar'])) {
			$idAgente=$_POST[''];
			$Matricula=$_POST[''];
			$Descripcion=$_POST[''];
			$Estado=$_POST[''];
			$_SESSION['multas'][$_GET['id']]=array('IdMulta'=>$idMulta,'IdAgente'=>$idAgente,'Matricula'=>$matricula,'Descripcion'=>$descripcion,'Estado'=>$estado);
		}
	}
	function mostrarMulta(){
	
		/*
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


*/
	}


?>