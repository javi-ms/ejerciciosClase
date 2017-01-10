<html>
<head>
	<title></title>
</head>
<body>
<h1>estacion</h1>
<hr>
</body>
</html>
<?php 
	//setlocale (LC_TIME, "es_ES");
	$mesActual = getdate();
	$mes = "$mesActual[month]";
	//$mes =febrero";
	//echo $mes;
		switch ($mes) {
			case $mes=='January '||$mes=='February '||$mes=='March ':
				echo " es invierno <br/>";
				break;
			case $mes=='April '||$mes=='May '||$mes=='June ':
				echo " es primavera <br/>";
				break;
			case $mes=='July '||$mes=='August '||$mes=='September ':
				echo " es verano <br/>";
				break;
			case $mes=='October'||$mes=='November'||$mes=='December':
				echo " es otoño <br/>";
				break;		
			default:
				echo " pon un mes<br/>";
				break;
		}

/**
*Se utiliza para ver el codigo de la pagina actual
*/
	echo "<a href=\"vercodigo.php?src=4.php\">ver codigo</a><br/>";	
	echo "<a href=\"indexT1.php\">volver</a><br/>";	
?>