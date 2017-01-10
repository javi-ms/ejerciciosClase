<?php 
	//session_start();
	/*if (!isset($_SESSION['login']=='Agente')) {
		header('Location:index.php');
	}else{
		echo "Estas logeado como Agente";
	}*/

	//if (isset($_POST['sentLogin'])) {
		echo "
		<table>
			<form method='POST' action=''>
				<tr>
					<td><label>Matricula</label></td>
					<td><input type='text' name='matricula'></td>
				<tr>
					<td><label>descripcion</label></td>
					<td><input type='textarea' name='descripcion'></td>
				<tr>
				
				<tr>
					<td><label>Fecha</label></td>
					<td><input type='month' name='fecha' min='2016-12' max='2030-12' value='0000-00-00' ></td>
				<tr>
				
				<tr>
					<td><label>Cantidad</label></td>
					<td><input type='text' name='cantidad'></td>
				<tr>
				
				<tr>
					<td><input type='submit' name='registrar' value='Registrar'></td>
				<tr>
		</table>

		";
	//}
		if (isset($_POST['registrar'])) {
			$matricula=$_POST['matricula'];
			$descripcion=$_POST['descripcion'];
			$fecha=$_POST['fecha'];
			$importe=$_POST['cantidad'];
			agregarMulta($matricula,$descripcion,$fecha,$importe);
		}
		

//	function ordenar( $a, $b ) {
 //   	return strtotime($_SESSION['multas']['fecha']) - strtotime($_SESSION['multas']['fecha']);
	//}
 /*
	function mostrar_array($datos) {
		foreach($_SESSION['multas'] as $dato) 
			echo "{$dato['fecha']} -&gt; {$dato['matricula']}<br/>";
	}
 
 
arsort($_SESSION['multas']);
 
mostrar_array($_SESSION['multas']);*/
?>
