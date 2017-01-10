<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <?php
            //Hacemos un require de la clase
            require 'conexion.php';

            //Creamos un nuevo objeto.
            $datos = new blog();
            //llamamos a los datos de acceso.
            $datos->mostrar();
            //Si está seleccionado el botón de enviar,
            if (isset($_POST['login'])) {
                //Quitamos los espacios y caracteres innecesarios.
                //y comprobamos que no estén vacíos los campos. Si lo están, mediante javascript 
                //se informa al usuario.
                if (empty(trim($_POST['nombre'])) || empty(trim($_POST['psw']))) {
                    echo "<script type='text/javascript'>
                    alert('Debe introducir un usuario y una contraseña');
                    document.getElementById('id').focus();
                    </script>";
                    //Salimos del código con exit.
                    exit();
                }
                //conectamos el usuario.
                $datos->loginUsuario($_POST);
            }
            //Si pulsamos el botón salir, desconectamos el usuario.
            if (isset($_POST['exit'])) {
                $datos->desconectarUsuario();
            }
            if(isset($_POST["registrar"])){
			$datos->mostrar_insertar();
		}
            //Sobre la sesión, ponemos en la parte superior izquierda el mensaje que estás en el 
            //sistema como tal usuario gracias a $_SESSION['user']
            if (isset($_SESSION['user'][0])) {
                //Ponemos las páginas a acceder a través de href
                echo "  <br /> 
                        <br />
                        <br />
                        <br />
                        <div>
	                        <table border='1'>
	                        <tr>
								<td>A day with Symfony2</td>
								<td align='center'><a href='noticia1.php'>Ir a</a></td>
	                        </tr>
	                        <tr>   
	                            <td>The pool on the roof must have a leak</td>
	                            <td align='center'><a href='noticia2.php'>Ir a</a>
	                            </td>
	                        </tr> 
	                        <tr>
								<td>Misdirection. What the eyes see and the ears hear, the mind believes</td>
								<td align='center'><a href='noticia3.php'>Ir a</a></td>
	                        </tr>
	                        <tr>   
	                            <td>The grid - A digital frontier</td>
	                            <td align='center'><a href='noticia4.php'>Ir a</a></td>
	                        </tr> 
	                        <tr>   
	                            <td>You're either a one or a zero. Alive or dead</td>
	                            <td align='center'><a href='noticia5.php'>Ir a</a></td>
	                        </tr>
	                        </table>
                        </div>
                        <div id='mensaje' style='color:red; font-weight:bold; position:absolute; top:0px; left:0%'>
                            Estás en el sistema como " . $_SESSION['user'][0] . "
                        </div>";
            }
        ?>
    </div>
</body>
</html>