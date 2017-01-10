<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<!--
		Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por ultimo el do/while. La
		estructura FOR permite incrementar una variable de 2 en 2:
		For ($f=2; $f<=20; $f=$f+2) 
		-->
	</head>

	<body>
		<?php
			echo "Tabla del 2 con for<br/>";
			for ($f=2; $f <= 20; $f=$f+2) { 
				echo $f."<br/>";
			}
			
			echo "Tabla del 2 con while <br/>";
			$f=1;
			while ($f <= 10) {
				echo $f*2,"<br/>";
				$f++;
			}
	
			echo "Tabla del 2 con do while";
			/*
			do{
				$f=1;
				echo $f."<br/>";
				$f++;
			}while ( $f< 10);
			*/
		?>
	</body>
</html>