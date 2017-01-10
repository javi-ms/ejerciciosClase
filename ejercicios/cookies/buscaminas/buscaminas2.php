<?php 
session_start();
//LAS CONSTANTES NO LLEVAN $
define('TAM', '9');
define('numCasilla', 'TAM*TAM');
define('nBombas', '9');

$resultado ="";
	if (!isset($_SESSION['tablero'])) {
		crearTablero();
	}

	if (isset($_POST['comprobar'])) {
		if (isset($_POST['valor'])) {
			if ($_POST['valor']==0) {
				$resultado="no hay mina";
			}
		}
	}

	//Creacion del tablero
	function crearTablero(){
		echo "<table>";
			for ($fila=0; $fila < TAM; $fila++) { 
				echo "<tr>";
				for ($columna=0; $columna < TAM; $columna++) { 
					echo "<td>";
					$_SESSION['tablero'][$fila][$columna]=0;
						echo $_SESSION['tablero'][$fila][$columna];
					echo "</td>";
				}
				echo "</tr>";
			}	
		echo "</table>";
		for ($n=0; $n < nBombas; $n++) { 
			do {
				$fila 		= mt_rand(0,TAM-1);
				$columna 	= mt_rand(0,TAM-1);
				$_SESSION['tablero'][$fila][$columna]=1;

			} while ( $_SESSION['tablero'][$fila][$columna]==9);
				$_SESSION['tablero'][$fila][$columna]==9;
		}
	}

	function mostrartablero(){
		echo "<form method='post' action=$_SERVER[PHP_SELF]>";
			echo "<table>";
			foreach ($_SESSION['tablero'] as $key => $value) {
				echo "<tr>";
				foreach ($value as $key2 => $value2) {
					echo "<td>";
					echo "<input type='hidden' name='valor' value='$value2'>";
					echo "<input type='submit' name='comprobar' value='ver'>";
					echo "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		echo "</form>";
	}
//necesitamos colocar bombas aleatoriamente dentro del tablero

	//Mostrar el tablero
	if (isset($_POST['enviar'])) {
		echo crearTablero();
		echo mostrartablero();
		echo $resultado;
	}
	


?>