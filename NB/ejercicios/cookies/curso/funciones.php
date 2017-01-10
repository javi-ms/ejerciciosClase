<?php 
	session_start();

	if(!isset($_SESSION['curso'])) {
		$_SESSION['curso']=array();
	}
	$curso=array();
	
	$nombre="";
	$nota1="";
	$nota2="";
	$nota3="";
	$notaFinal="";


/*
2. Crear una pequeña aplicación que permita la gestión académica del módulo de DWES. Interesa almacenar las notas de cada trimestre y mostrar un informe con la nota media.
*/
	function resultadoNota($nombre,$nota1,$nota2,$nota3){
		if (!isset($_POST['enviar'])) {
			echo "no se ha podido calcular";
		}else{
			$notaFinal=($nota1+$nota2+$nota3)/3;
			$_SESSION['curso'][]=array('nombre'=>$nombre,'nota1'=>$nota1,'nota2'=>$nota2,'nota3'=>$nota3,'notaFinal'=>$notaFinal);
			//echo $notaFinal;
		}
	}

	function mostrarNotas(){
		echo "<table>";
			echo "<tr>
					<th>Nombre</th>
					<th>Nota1</th>
					<th>Nota2</th>
					<th>Nota3</th>
					<th>Nota Final</th>
				</tr>";
			foreach ($_SESSION['curso'] as $key => $value) {
			echo "<tr>";
				foreach ($value as $key2 => $value2) {
					echo "<td>$value2</td>";
				}
				//
			echo "</tr>";	
			}
		echo "</table>";
	}
	/*
	array de session con una tabla de X 
	perfiles de usuario
	cada uno con distintas funciones
	logaut: estas como un usuario no es un cierre de session 
	*/

?>