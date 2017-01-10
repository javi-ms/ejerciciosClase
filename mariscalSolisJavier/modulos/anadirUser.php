<?php 
echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
//require_once "funciones.php";<?php echo $_SERVER[PHP_SELF]	
?>
	<?php 
		if (isset($_POST['agregar'])) {
			$nombre=$_POST['nombre'];
			$pass=$_POST['pass'];
			$passR=$_POST['passR'];
			$usuario=$_POST['usuario'];
			//print_r(anadirAgentes());
			anadirAgentes($usuario, $pass, $passR, $nombre);
		}
	?>

<!--Añadir formato con una tabla-->
	<table id="tablaAgregar" border="1">
		<form method="post" action="">
			<tr>
				<th>
					<label>Agregar agente</label>
				</th>
			</tr>
			<tr>
				<td><label>Usuario</label></td>
				<td>	
					<input type="text" name="usuario">
				</td>
			</tr>
			<tr>	
				<td><label>password</label></td>
				<td>
					<input type="text" name="pass">
				</td>
				</tr>
				<tr>	
					<td><label>repetir password</label></td>
				<td>
					<input type="text" name="passR">
				</td>
			</tr>
			<tr>	

					<td><label>Nombre</label></td>
		
				<td>
					<input type="text" name="nombre">
				</td>
			</tr>
			<tr>
				<td>	
					<input type="submit" name="agregar" value="agregar">
				</td>
			</tr>
		</form>
	</table>
	<div>
	<?php
	//Mostrar los agentes
	//mostrarAgentes();
	  ?>
	</div>