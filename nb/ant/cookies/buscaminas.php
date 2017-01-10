<?php
define("TAM",10);
define("NUMMINAS",10);
define("NUMCASILLAS",TAM*TAM);

if (!isset($_session['tablero'])) {
	$_session['tablero']=array();
	$_session['visible']=array();

	//$_session['estado']=0;
	//$_session['casillasVistas']=0;
	creartablero();

if (isset($_GET['fila'])) {
		$filEntrada = $_GET['fila'];
		$colEntrada = $_GET['columna'];
		clicCasilla($filEntrada, $colEntrada);
	}

	function creartablero(){
		for ($fila=0; $fila < TAM; $fila++) { 
			for ($columna=0; $columna < TAM; $columna++) { 
				$_session['tablero'][$fila][$columna]=0;
				$_session['visible'][$fila][$columna]=0;
			}
		}
			$estado=0;
			$casillasVistas=0;
			for ($n=0; $n <NUMMINAS ; $n++) { 
				//busca una posicion aleatoria donde no haya otra bomba
				do{
					$fila = mt_rand(0,9);
					$columna = mt_rand(0,9);
				}while ($_session['tablero'][$fila][$columna]==9);
				//pone la bomba
				//echo "ponemos la bomba en $fila, $columna"
				$_session['tablero'][$fila][$columna]=9;
				//recore el contorno de la bomba e incrementa los contgadores
				for ($f=max(0,$fila-1); $f <=min(TAM-1, $columna+1) ; $f++) { 
					for ($c=max(0,$columna); $i <=min(TAM-1, $columna+1) ; $c++) { 
						if ($_session['tablero'][$f][$c]!=9) {//si no es bomba
						 $_session['tablero'][$f][$c]++;
						}
					}
				}
			}
	}
	function comGanador(){
		$lganador=false;
		$contador=0;
		$numOcultos=0;
		$numVisibles=0;

		foreach ($_session['visible'] as $ind => $valF) {
			foreach ($valF as $ind2 => $valor) {
				if ($valor==0) {
					$numOcultos++;
				}
				else{
					$numVisibles++;
				}
			}
		}
		if ($numVisibles==NUMCASILLAS-NUMMINAS) {
			$lganador=true;
		}
	}

	function mostrarVisible(){
		echo "<table>";
		for ($fila=0; $fila < TAM ; $fila++) { 
			echo "<tr>";
			for ($columna=0; $columna < TAM; $columna++) { 
				echo "<td>";
				if ($_session['visible'][$fila][$columna]==1) {
					if ($_session['tablero'][$fila][$columna]==0) {
						echo "*";
					}
					else{
						echo "<a href=\buscaminas.php?fila=$fila&columna=$columna>";
						echo $_session['visible'][$fila][$columna];
						echo "</a>";
					}
				}
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>"
	}

function clicCasilla($f,$c){
	if ($_session['visible'][$sf][$c]==0) {
		
		$_session['visible'][$sf][$c]=1;

		if ($_session['visible'][$f][$c]==9) {
			echo "Explosion-->HAS MUERTO";
		}else{
			if (comGanador()) {
				//si llega  alas 90 casillas descubiertas gana
				echo "HAS GANADO";
			}
			else{
				//si hay minas cercanas
				if ($_session['tablero'][$f][$c]==0) {
					//recorre las casillas cercanas y tambien las ejecuta
					for ($if=max(0,sf-1); $if <=min(TAM-1, sf+1) ; $i++) { 
						for ($ic=max(0,$c-1); $ic <=min(TAM-1, $c+1) ; $ic++) { 
							clicCasilla();
						}
					}
				}
			}
		}
	}


}

?>