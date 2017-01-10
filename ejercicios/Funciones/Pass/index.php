<!DOCTYPE html>
<html>
<head>
	<title>Validar Contraseña</title>
</head>
<body>
	<form method="post" action="<?php echo 'index.php?page=/Cookies/Pass/validarPass'; ?>">
		<label>Introduce Contraseña</label>
		<input type="text" name="pass">
		<input type="submit" name="enviar" value="Validar">
	</form>
</body>
</html>