<?php
/**
*paleta de colores, con enlace a la cabecera, la cabecera se pondra del color que eligas 
*/
$var1;
$var2;
$var3;



	echo "<br/><a href=\"vercodigo.php?src=paletaColores.php\">ver codigo</a>"
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table>
			<tr>
				<?php 

					for ($var1=00; $var1 <= 32; $var1=$var1+3) { 
						for ($var2=00; $var2 <= 32 ; $var2=$var2+3) { 
							for ($var3=00; $var3 <= 32 ; $var3=$var3+3) { 
								echo '<td bgcolor="#'.dechex($var1).dechex($var2).dechex($var3).'">#'.dechex($var1).dechex($var2).dechex($var3).'</td>';
							}
							echo "<tr></tr>";
						}
						
					}

				 ?>
			</tr>

		</table>
	</body>
</html>