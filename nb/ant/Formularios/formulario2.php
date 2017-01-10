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
?>