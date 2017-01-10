 <?php    
 	/*Si se pulsa boton que realize lo de dentro*/     
    print_r($_POST);
    if(isset($_POST["enviar"])){  

	   /*Se recoge el nombre y apellido y se muestra*/
 	    echo "<p>Nombre: ".$_POST["nombre"];
    	echo "<p>Apellido1: ".$_POST["apellido1"];
    	echo "<p>Apellido2: ".$_POST["apellido1"];
    	echo "<p>Fecha de Nacimiento: ".$_POST["anho"];
        echo "<br/>";
        //Consulta para checkbox clase con For.         
        if(!empty($_POST['clase'])){
            $seleccionados = $_POST['clase'];

            echo "Los carnets seleccionados son: ";


            for($i=0; $i < count($seleccionados); $i++){
            echo $seleccionados[$i] . ", ";   
        }
        }else{
            echo "No tiene carnet ";
        }
        /*echo "<img src=".$_POST["imagenAdj"]">";   */	

    	//echo "<p>Estado legal: ".$_POST["estadolegal"];
        echo "<br/>";

 

       
        echo "<br />";

        //Radiobutton:
        //
        echo "Estado legal: ".$_POST["estadolegal"];

    }else {        
    	echo "ACCESO RESTRINGIDO";    
    }
?>