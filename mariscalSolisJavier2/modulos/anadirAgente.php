<?php 
	
?>
<div>
	<table>
		<form method="post" action="">
				<tr>
					<td>
						<label>Usuario</label>
					</td>
					<td>
						<input type="text" name="usuario">
					</td>
				</tr>
				<tr>
					<td>
						<label>Password</label>
					</td>
					<td>
						<input type="password" name="psw">
					</td>
				</tr>
				<tr>
					<td>
						<label>Repite Password</label>
					</td>
					<td>
						<input type="password" name="pswRep">
					</td>
				</tr>
				<tr>
					<td>
						<label>Nombre</label>
					</td>
					<td>
						<input type="text" name="nombre">
					</td>
				</tr>
				<tr>
					<td>
							<input type="submit" name="registrar" value="Registrar">
					</td>
				</tr>
		</form>
	</table>
</div>

<?php 
if (!isset($_POST['registrar'])) {
		
	echo "No hay agentes registrados";
	}else{
		$id=count($_SESSION['usuariosRegistrados'])-1;
		$usuario=$_POST['usuario'];
		$psw=$_POST['psw'];
		$psw2=$_POST['pswRep'];
		$nombre=$_POST['nombre'];
			agregarAgente($id,$usuario,$psw,$psw2,$nombre,$validado);
	}
		mostrarAgentes();

?>