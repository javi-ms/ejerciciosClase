<?php
setcookie("user", "javier", time()+3600);
//iniciar sesion con array de sesion
session_start();
//si no existe
	if (!isset($_SESSION['agenda'])) {	
		//creamos el array agenda
		$_SESSION["agenda"]=array();
	}else{

		$contactos=$_SESSION['agenda'];
	}
	echo "<form form action='#' method='post'>";
		echo "<table>";
			echo "<tr>";
				echo "<td>nombre</td>";
				echo "<td><input type='text' name='nombre'></td>";
				echo "<tr>";
				echo "<td>Nº Telefono</td>";
				echo "<td><input type='text' name='tlf'></td>";
				echo "</tr>";
			echo "</tr>";
			
			echo "<tr>";
				echo "<td><input type='submit' name='guardar'value='guardar'></td>";
				echo "<td><input type='submit' name='cerraSesion'value='Cerrar Sesion'></td>";
			echo "</tr>";
		echo "</table>";
	echo "</form>";

	if (isset($_POST['guardar'])) {

		//añadir al final del array tras pulsar el boton
		array_push($_SESSION['agenda'],array("nombre"=>$_POST['user'], "tlf"=>$_POST['tlf']));
		$contactos=$_SESSION['agenda'];

		print_r ($_SESSION['agenda']);
		//print_r ($contactos);

		//mostramos los datos
		echo "<br/>Nombre: ".$_POST['nombre']."<br/>";
		echo "TLF: ".$_POST['tlf'];		
		
	}

	if (isset($_POST['cerrarSesion'])) {
		    // Establecemos la fecha de expiración una hora antes.
    setcookie("javier", "", time()-3600);
    //También
    setcookie('pws', ' ');
		//session_start();
		/*session is started if you don't write this line can't use $_Session  global variable*/
		//$_SESSION["newsession"]=false;
		//unset($_SESSION["newsession"]);
		/*session deleted. if you try using this you've got an error*/
			session_destroy($_SESSION['agenda']);
			unset($_SESSION['agenda']);
	// Establecemos la fecha de expiración una hora antes.
   // setcookie("user", "", time()-3600);
    //También
    //setcookie('pws', ' ');
	}
?>