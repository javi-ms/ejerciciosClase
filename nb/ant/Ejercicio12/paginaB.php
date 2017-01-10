<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1 align='center'>Página B</h1>
	<?php
        session_start();
        if (isset($_SESSION['user'])) {
            echo "	<div id='mensaje' style='color:red; font-weight:bold; position:absolute; top:0px; left:0%'>
            			Estás en el sistema como " . $_SESSION['user'][0] . "
            		</div>"; 
        }
        //Ahora, comprobamos los permisos.
        //Si en el array de la sesión encontramos los permisos para estar en la página B,
        //entonces tenemos permiso para estar aquí.
        if(in_array("paginaB",$_SESSION['user'])){
        	echo "<h3 align='center'>Tiene permiso para estar en esta página</h3>";
        }else{
        	echo "<h3 align='center'>No tiene permiso para estar en esta página</h3>";
        }
        ?>
        <!-- Por último, mostramos dos enlaces con los, uno con el índice y otro con la página A -->
        <div style='text-align:center;'>
            <a href='indice.php'>Inicio</a>
            <a href='paginaA.php' style='margin-left:50px;'>página A</a>
        </div>
</body>
</html>