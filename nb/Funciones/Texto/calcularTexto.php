<?php 

/*
Escribe una función que cuente el número de palabras de una cadena de caractéres. Utiliza 
un formulario con un "textarea" para comprobar su funcionamiento. 
*/
	$texto='';

	function calcularTexto($texto){
		//nos sustituye los espacios
		$textoSinEspacios = preg_replace('[\s+]',"", $texto);
		//nos lee el tamaño del texto
		$lecturaTexto = strlen($textoSinEspacios);
		//echo $lecturaTexto;
		return $lecturaTexto; 
	}
	//se ejecuta cuando se pulse el boton enviar en la otra pagina
	if (isset($_POST['enviar'])) {
		//nos recoge el texto
		$texto = $_POST['texto'];
		//nos muestra el texto a partir de la funcion
		echo calcularTexto($texto);
	}




?>