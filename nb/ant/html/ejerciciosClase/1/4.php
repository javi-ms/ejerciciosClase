<?php 
/*
* Queremos almacenar nombre, apellidos y grupo de los alumnos del departamento de informática 
* para generar de manera automática el nombre de usuario de acceso a los sistemas informáticos.
* Diseña e implementa un array para guardar esta información y posteriormente generar un array
* con el nombre de los usuarios, teniendo en cuenta que éste se forma: caa+pp+ss+n

    caa: Indica ciclo y año.
    pp: Indica las 2 primeras letras del primer apellido.
    ss: Indica las 2 primeras letras del segundo apellido.
    n: Indica la 1ª letra del nombre.

*/
	$nameUser = array(
						"Ciclo" =>"DAW",
						"Anho" =>1990,
						"Apellido1" =>"Mariscal",
						"Apellido2" =>"Solis",
						"Nombre"=>"Javier"
	);

	
		foreach ($nameUser as $key => $value) {
		//	print_r("esto es la muestra ".$value);
		
			
			echo "<br/>".substr($value,0,3)."<br/>";

		
			/*
			if (count($value>3)) {
				for ($i=0; $i < count($value); $i++) { 
			//	echo "El ". $key . " es " . $value ;
				//se esa para extraer una cantidad de caracteres
				echo substr($value,0,2);
			
			}
			}*/
			
		}	

			
			
		
	
//queremos recoger el tamaño del array y de ese tamaño coger unas posiciones exactas
	echo "<br/d>Esto es lo que deberia salir DAW90MaSoJa";


	
		echo "<br/><a href=\"vercodigo.php?src=4.php\">ver codigo</a>";
 ?>