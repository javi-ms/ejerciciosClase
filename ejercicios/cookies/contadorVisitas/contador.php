<?php 
	//creamos la sesion
	session_start(); 
	//si el $_session existe
	if(isset($_SESSION['contador'])){ 
		//si existe le añadimos 1
		$_SESSION['contador'] = $_SESSION['contador'] + 1; 
		//mensaje
		$mensaje = 'Número de visitas: ' . $_SESSION['contador']; 
	}else{ 
		//primera vez que llega lo unicializamos en 1 el contador
		$_SESSION['contador'] = 1; 
		$mensaje = "¡HOLA!, visita nº=1"; 
	} 
?> 
<?xml version="1.0" encoding="iso-8859-1"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">  
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
		<title>Contador de sesion</title>
	</head> 
		<body> 
			<p> 
				<?php echo $mensaje; ?> 
			</p> 
	</body> 
</html>