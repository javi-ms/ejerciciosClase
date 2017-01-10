<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//Primero llamamos a la clase visita para poder usarla.
		require("visita.php");

		//Creamos un objeto visita.
		$visita = new Visita();

		//Mostramos el formulario con el botón de insertar.
		echo "<div align='center'>
			<form method='post' action='prueba.php'>
				<input type='submit' name='btn_Insertar' value='Insertar'>
			</form>
		</div>";
		
		//Hacemos las comprobaciones de los distintos botones.
		if(isset($_POST["btn_Insertar"])){
			$visita->mostrar_insertar();
		}

		if(isset($_POST["btn_aceptarInsertar"])){
			if(!empty($_POST)){
				$visita->insertarVisita($_POST);
			}else{
				echo "error";
			}
		}

		if(isset($_POST["btn_aceptarModificar"])){
			if(!empty($_POST)){
				$visita->aceptarModificar($_POST);
			}else{
				echo "error";
			}
		}


		if(isset($_POST["btn_borrar"])){
			$visita->borrar();
		}

		if(isset($_POST["btn_modificar"])){
			$visita->modificar();
		}
		
		//Por último, después de todas las comprobaciones, mostramos los datos
		$visita->mostrar();

		


	 ?>
</body>
</html>