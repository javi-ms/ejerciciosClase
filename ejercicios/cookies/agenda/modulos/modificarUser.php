	<?php 
echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
require_once "header.php";
//require_once "funciones.php";
//<?php echo $_SERVER[PHP_SELF]	
?>
<?php 
	$nombre ="";
	$tlf="";
	//recogemos el id
	if (isset($_GET['id'])) {
		print_r( $_SESSION['agenda'][$_GET['id']]);	
		$usurio=$_SESSION['agenda'][$_GET['id']];
		$nombre=$usurio['nombre'];
		$tlf = $usurio['tlf'];
	}
	
	if (isset($_POST['modificar'])) {
		$nombre=$_POST['modNombre'];
		$tlf=$_POST['modTlf'];
		$_SESSION['agenda'][$_GET['id']]=array('nombre'=>$nombre,'tlf'=>$tlf);

	
	}
	
?>

<!--Añadir formato con una tabla-->
	<table id="tablaModr" border="1">
		<form method="post" action="#">
			<tr>
				<th>
					<label>Modificar usuario</label>
				</th>
			</tr>
			<tr>
				<td>	
					<input type="text" name="modNombre" value="<?php echo $nombre ?>">
				</td>
				<td>
					<input type="text" name="modTlf" value="<?php echo $tlf ?>">
				</td>
			</tr>
			<tr>
				<td>	
					<input type="submit" name="modificar" value="Modificar">
				</td>
			</tr>
		</form>
	</table>

	<div>
	<?php
		mostrarAgendaMod();
		if (empty($_SESSION['agenda'][$_GET['id']])) {
			header ("Location: anadirUser.php");
		}

		if (isset($_POST['eliminar'])) {
		echo "hola";
		
		unset($_SESSION['agenda'][$_GET['id']]);
		
		//Mostrar la agenda total
		}
	  ?>
	</div>
<?php
	require_once "footer.php";
?>