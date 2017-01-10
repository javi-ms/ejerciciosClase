<html>
<head>
	<title></title>
</head>
<body>

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
	echo "<a href=\"vercodigo.php?src=3.php\">ver codigo</a>";	
?>