<?php
	
	$_SESSION['urluser'][]=array('usuario'=>$_SESSION[usuario]),
								 'url'=>$_POST['url'], 
								 'desc' =>$_POST['desc'];

	echo "alta correcta";

//condicion de ejecucion
//se puede hacer atraves de un if
?>

<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="procesaNuevaUrl.php">
		
<!--procesaNuevaUrl.phpt// transparente o mensaje-->
	</form>
</body>
</html>