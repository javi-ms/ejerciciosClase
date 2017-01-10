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
            $datos = new Conexion();
            //llamamos a los datos de acceso.
            $datos->formAcceso();
            //Si está seleccionado el botón de enviar,
            if (isset($_POST['btn_enviar'])) {
                //Quitamos los espacios y caracteres innecesarios.
                //y comprobamos que no estén vacíos los campos. Si lo están, mediante javascript 
                //se informa al usuario.
                if (empty(trim($_POST['usuario'])) || empty(trim($_POST['password']))) {
                    echo "<script type='text/javascript'>
                    alert('Debe introducir un usuario y una contraseña');
                    document.getElementById('iduser').focus();
                    </script>";
                    //Salimos del código con exit.
                    exit();
                }
                //conectamos el usuario.
                $datos->loginUsuario($_POST);
            }
            //Si pulsamos el botón salir, desconectamos el usuario.
            if (isset($_POST['btn_salir'])) {
                $datos->desconectarUsuario();
            }
            //Sobre la sesión, ponemos en la parte superior izquierda el mensaje que estás en el 
            //sistema como tal usuario gracias a $_SESSION['user']
            if (isset($_SESSION['user'][0])) {
                //Ponemos las páginas a acceder a través de href
                echo "  <br /> 
                        <br />
                        <div style='text-align:center;'>
                            <a href='paginaA.php'>pagina A</a>
                            <a href='paginaB.php' style='margin-left:50px;'>pagina B</a>
                        </div>
                        <div id='mensaje' style='color:red; font-weight:bold; position:absolute; top:0px; left:0%'>
                            Estás en el sistema como " . $_SESSION['user'][0] . "
                        </div>";
            }
        ?>
    </div>
</body>
</html>