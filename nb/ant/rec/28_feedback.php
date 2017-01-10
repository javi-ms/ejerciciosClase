<html>
	<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title> un pequeño mailer para recopilar la opiniòn </title>
	</head>
	<body>
		<h1>Feedback-Mailer</h1>
			<p>¡Enviame un e-mail!</p>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Tu direcciòn de e-mail: <br>
			<input type="text" name="Mail" ><br>
			Tu comentario: <br>
			<textarea name="message" cols="50" rows="5"></textarea><br>
			<input type="submit" value="Enviar">
		</form>
		<?php
			$receiverMail = "tudireccion@tudominio.es"; // escribe aqui tu direcciòn
			if (isset($_POST['Mail']) && $_POST['Mail'] != "") {
				if (mail ($receivermail, "¡Tienes correo nuevo!", $_POST['message'], "From:$_POST[Mail]")) {
					echo "<p>Gracias por enviarme tu opiniòn.</p>\n";
				} else {
					echo "<p>Lo siento, ha ocurrido un error.</p>\n";
				}
			}
		?>
		<ol>
			<li>¿Es importante poner la linea 4 del script en nuesto codigo?</li>
				<p>Si es importate, si no, no saldrian las tildes</p>
			<li>¿Funciona bien este programa?</li>
				<p>NO</p>
		</ol>
	</body>
</html>