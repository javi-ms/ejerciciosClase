<?php 
	require_once 'funciones.php';

				if (isset($_POST['enviar'])) {
					$nombre=$_POST['nombre'];
					$nota1=$_POST['nota1'];
					$nota2=$_POST['nota2'];
					$nota3=$_POST['nota3'];
				
					echo resultadoNota($nombre,$nota1,$nota2,$nota3);	
				}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Curso</title>
</head>
<body>
<!--
2. Crear una pequeña aplicación que permita la gestión académica del módulo de DWES. Interesa almacenar las notas de cada trimestre y mostrar un informe con la nota media.
-->
<form method="POST" action="">
	<table border="1">
		<tr>
			<th colspan="3">Curso 2016</th>	
		</tr>
		<tr>
			<th>Nombre</th>
			<th>trimestre</th>
			<th>Notas</th>
		</tr>
		<tr>
			<td rowspan="4">
				<input type="text" name="nombre">
			</td>
		</tr>
		<tr>
			<td>		
				Nota 1er Trimestre
			</td>
			<td>		
				<input type="text" name="nota1">
			</td>
		</tr>
		<tr>
			<td>		
				Nota 2º Trimestre
			</td>
			<td>		
				<input type="text" name="nota2">
			</td>
		</tr>
		<tr>
			<td>		
				Nota 3er Trimestre
			</td>
			<td>		
				<input type="text" name="nota3">
			</td>
		</tr>
		<tr>
			<td colspan="3" align="right">		
				<input type="submit" name="enviar" value="Registar y calcular">
			</td>
		
		</tr>
	</table>
</form>
	<div>
		<?php mostrarNotas(); ?>
	</div>
</body>
</html>