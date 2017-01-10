<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>Condicion IF</title>
	</head>
	<body>
		<h1>Condicional IF</h1>
		<?php
			$a = 8;
			$b = 3;
				echo "Valor de a: ",$a," y el valor de b:",$b,"<br>";
				
				if ($a<$b){
					echo "a es menor que b";
				}else{
					echo " a no es menor que b";
				}
		?>
		<ol>
			<li>¿Qué hace la sentencia IF…ELSE?</li>
				<p>Si se cumple la sentencia se realiza lo que haya dentro del if, si no se cumple lo del else</p>
		</ol>
	</body>
</html>