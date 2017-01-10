<?php
session_start();
/*aqui se registraran los enlaces del usuario*/
//comprobar cuando y como se ejecuta este scrip
if ($_SESSION['user']='invitado') {
	header('Location:index.php');
}
/*
if (condition) {
	$_SESSION['user']=$_POST['user'];
}
*/
//condicion de ejecucion
/*
no esten creadas las variables de session o $_session['user']='invitado'
*/
echo "informacion:" . $_SESSION['user'];
echo "<a href='salir.php'>Salir</a>"

//funcion mostrar url()

Function mostrarURL(){

	foreach ($$_SESSION['urlUser'] as $key => $value) {
		if ($value['usuario'] = $_SESSION['user']) {
			//editar mostrarUrl
			//<a href=editarUrl.php?id=$key>
			echo $_value['url'] $_value['descripcion'];
		}
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="nuevaUrl.php">
		<a href="nuevaUrl.php">
	</form>
		<table border="1">
			<tr>
				<td>
					nombre usuario
				</td>
				<td>
				<!--Aqui va los enlaces que vienen del array del usuario-->
					enlace1
				</td>

			</tr>	


		</table>

</body>
</html>