<?php 
echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
require_once "header.php";
//require_once "funciones.php";<?php echo $_SERVER[PHP_SELF]	
?>
	<?php 
		if (isset($_POST['agregar'])) {
			$nombre=$_POST['nombre'];
			$tlf=$_POST['tlf'];
			anadirUsuario($nombre, $tlf);
		}
	?>

<!--Añadir formato con una tabla-->
	<table id="tablaAgregar" border="1">
		<form method="post" action="">
			<tr>
				<th>
					<label>Agregar usuario</label>
				</th>
			</tr>
			<tr>
				<td>	
					<input type="text" name="nombre">
				</td>
				<td>
					<input type="text" name="tlf">
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
	//Mostrar la agenda total
		mostrarAgendaAnadir();
	  ?>
	</div>
<?php
	require_once "footer.php";
?>