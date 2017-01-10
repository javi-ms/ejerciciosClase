<?php 
require_once "funciones.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		$fila=mostrar();
		foreach ($fila as $key => $value) {
			echo $value;
		}
	?>

</body>
</html>