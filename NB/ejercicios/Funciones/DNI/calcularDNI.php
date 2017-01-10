<?php

	$letras='TRWAGMYFPDXBNJZSQVHLCKE';
	$avLetra='';
	$letraX = 0; 
	$letraY = 1;
	$letraZ = 2;

		/* Obtiene letra del NIF a partir del DNI */
		//DNI Español
		function calcularDNI($numDNI, $letras){
			//dividimos el DNI entre 23 por que es la cantidad de letras que hay en la cadena $letras
			$resto = $numDNI%23;
			//se pone la cadena que queremos recorrer y le decimos donde parar
			return substr($letras,$resto, 1);
		}
		function calcularDNIExtranjero($numDNIm, $letras){
			$resto =$numDNI%23; 
		}
		//calcular DNI español
		if (isset($_POST['espanol'])) {
			$numDNI = $_POST['numDNI'];
			$avLetra = calcularDNI($numDNI, $letras);
		}/*
		//calcular DNI extranjero z1620125G
		if (isset($_POST['extranjero'])) {
			$numDNI = $_POST['numDNI']
			if (substr($numDNI, -7,1)!= $letraX || substr($numDNI, -7,1)!= $letraY || substr($numDNI, -7,1)!= $letraZ ) {
				echo "El DNI no es correcto";
			}
		}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo $avLetra ?>
</body>
</html>