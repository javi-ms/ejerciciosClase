<?php
session_start();
	require_once 'modulos/funciones.php';
	//cargamos las variables de sesion
	cargarVariablesSesion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<LINK REL=StyleSheet HREF="style/style.css" TYPE="text/css" MEDIA=screen>
	<title>Ejercicios de PHP</title>
</head>
<body>
	
	<div id="tituloPHP"><h1>Multas</h1></div>

	<div>
		<table>
			<tr>
				<td><a href="index.php?page=anadirAgente">Agregar Agente</a></td>
			</tr>
		</table>
	</div>
	<!--
	<div align="center" >
		<table border="" id="tablaIndice">
			<tr>
				<td><a href="modulos/primerTrimestre.php">1er Trimestre</a></td>
				<td><a href="modulos/segundoTrimestre.php">2º Trimestre</a></td>
				<td><a href="modulos/about.php"> Sobre mi </a></td>
			</tr>
		</table>
	</div>
	-->
	<hr>
	