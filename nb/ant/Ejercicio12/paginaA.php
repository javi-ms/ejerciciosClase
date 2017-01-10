<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1 align='center'>Página A</h1>
	<?php
		//Inicializamos la sesión.
        session_start();
        //Si la sesión actual es la denominada 'user'
        if (isset($_SESSION['user'])) {
        	//Se mostrará a la izquierda en rojo el mensaje Estás en el sistema como usuario X
            echo "	<div id='mensaje' style='color:red; font-weight:bold; position:absolute; top:0px; left:0%'>
           				Estás en el sistema como " . $_SESSION['user'][0] . "
           			</div>";
        }else{
        	echo "	<div id='mensaje' style='color:red; font-weight:bold; position:absolute; top:0px; left:0%'>
           				No estás en el sistema
           			</div>";
            echo "<h3 align='center'>No tiene permiso para estar en esta página</h3>";
            exit();

        }
        //Ahora, comprobamos los permisos.
        if(in_array("paginaA",$_SESSION['user'])){
        	//Si en el array de la sesión encontramos los permisos para estar en la página B,
       	 	//entonces tenemos permiso para estar aquí.
        	echo "<h3 align='center'>Tiene permiso para estar en esta página</h3>";
        }else{
        	echo "<h3 align='center'>No tiene permiso para estar en esta página</h3>";
        }
        ?>
        <!-- Por último, mostramos dos enlaces con los, uno con el índice y otro con la página B -->
        <div style='text-align:center;'>
            <a href='indice.php'>Inicio</a>
            <a href='paginaB.php' style='margin-left:50px;'>página B</a>
        </div>
</body>
</html>