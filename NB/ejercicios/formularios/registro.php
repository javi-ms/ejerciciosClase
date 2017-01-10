<?php

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
	$name=filtrado($_POST['name']);
	$subname=filtrado($_POST['subname']);
	$sexo=$_POST['sexo'];
	$so =$_POST['so'];
	// Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
    //$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

	if (isset($_POST['enviar'])) {
		

           if (empty($name)) {
               echo "El nombre esta vacio.<br/>";
           }else{
                echo $name.'<br/>';
           }
           if (empty($subname)) {
               echo "El apellido esta vacio.<br/>";
           }else{
                echo $subname.'<br/>';
           }
    	echo "<p>".$sexo. '</p>';

		//if( isset($_POST['checkbox']) ) {
        // el campo 'casilla' fue seleccionado
    		if (isset($_REQUEST['CicloMedio'])){
           		echo "<p>Ciclo Medio</p>";
    		}
    		elseif (isset($_REQUEST['CicloSuperior'])){
    	        echo "<p>Ciclo Superior</p>";
        	}elseif(isset($_REQUEST['Carrera'])){
        		echo "<p>Carrera</p>";
        	}
       // } else {
        // el campo 'casilla' no fue seleccionado
       //     echo "Selecciona unos estudios";
      //  }
    	echo "<p>".$so."</p>";
    	
	}

?>