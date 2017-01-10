<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
	<head>
	   <title>Calendario PHP</title>
	  <!-- <link rel="STYLESHEET" type="text/css" href="estilo.css">-->
	</head>

	<body>
		<div align="center">
		<?php
		require ("calendario.php");

		if ($_POST) {
		   $mes = $_POST["nuevo_mes"];
		   $ano = $_POST["nuevo_ano"];
		}elseif ($_GET){
		   $mes = $_GET["nuevo_mes"];
		   $ano = $_GET["nuevo_ano"];
		}else{
		   $tiempo_actual = time();
		   $mes = date("n", $tiempo_actual);
		   $ano = date("Y", $tiempo_actual);
		}

		mostrar_calendario($mes,$ano);
		formularioCalendario($mes,$ano);

		//tomo el nombre del mes que hay que imprimir
$nombre_mes = dame_nombre_mes($mes);

//construyo la tabla general
echo '<table class="tablacalendario" cellspacing="3" cellpadding="2" border="0">';
echo '<tr><td colspan="7" class="tit">';
//tabla para mostrar el mes el año y los controles para pasar al mes anterior y siguiente
echo '<table width="100%" cellspacing="2" cellpadding="2" border="0"><tr><td class="messiguiente">';
//calculo el mes y ano del mes anterior
$mes_anterior = $mes - 1;
$ano_anterior = $ano;
if ($mes_anterior==0){
   $ano_anterior--;
   $mes_anterior=12;
}
echo '<a href="index.php?nuevo_mes=' . $mes_anterior . '&nuevo_ano=' . $ano_anterior .'"><span>-</span></a></td>';
echo '<td class="titmesano">' . $nombre_mes . " " . $ano . '</td>';
echo '<td class="mesanterior">';
//calculo el mes y ano del mes siguiente
$mes_siguiente = $mes + 1;
$ano_siguiente = $ano;
if ($mes_siguiente==13){
   $ano_siguiente++;
   $mes_siguiente=1;
}
echo '<a href="index.php?nuevo_mes=' . $mes_siguiente . '&nuevo_ano=' . $ano_siguiente . '"><span>+</span></a></td>';
//finalizo la tabla de cabecera
echo '</tr></table>';
echo '</td></tr>'; 
		?>
		</div>
	</body>
</html> 