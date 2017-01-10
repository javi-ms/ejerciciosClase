<html>
	
	<head>
	</head>
	<body>
		<!--Nos enlace nuestro formulario y lo envia-->
		<form action="phpself" method="post">

			Nombre<input type="text" name="nombre">
			Apellidos<input type="text" name="apellido">
			<!--Este boton enviara la informacion-->
			<p><input type="submit" name="boton" value="Enviar"></p>

			<?php
			 	/*Si se pulsa boton que realize lo de dentro*/
			 	if (isset($_POST["boton"])){
			 	/*Se recoge el nombre y apellido y se muestra*/

			        echo "<p>Nombre: ".$_POST["nombre"];
			    	echo "<p>Apellidos: ".$_POST["apellido"];
			    }   
				else {        
			    	echo "ACCESO RESTRINGIDO";    
				}
				/*
				if (isset($_POST["Enviar"] && empty("nombre") && empty("apellido"))) {	
				}*/
			?>
		</form>	
			


	</body>

</html>