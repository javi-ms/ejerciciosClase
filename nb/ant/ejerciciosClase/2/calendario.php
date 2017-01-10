<html>
	<body>
		<form action="calendario.php" method="POST">
			<input type='text' name='mes'>
			<input type='number' name='mes'>
			<input type='submit' name='enviar'>
		</form>
	</body>
</html>
<?php
	switch ($mes) {
		case 'Enero':
			echo "enero";
			break;

		case 'febrero':
			echo "febrero";
			break;

		case 'marzo':
			echo "marzo";
			break;

		case 'Abril':
			echo "Abril";
			break;

		case 'mayo':
			echo "mayo";
			break;

		case 'Junio':
			echo "Junio";
			break;

		case 'Julio':
			echo "Julio";
			break;
		
		default:
			echo 'Error';
			break;
	}
	//	gestion/administracion de un array con sesion y autentificacion de un array de sesiones
	//perfiles
	if ($_POST) {

		echo "<table border='1'>";
			echo "<tr>";

				for ($i=1; $i <=30; $i++) {
					echo "<td>".$i;	

				}
				
			echo "</tr>";
		echo "</table>";
	}		
?>