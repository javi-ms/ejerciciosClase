<html>
	<head>
		<title>Problema</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
		<!--
			Confeccionar una pagina que simule ser la de un periodico. La misma debe permitir configurar que tipo
			de titular deseamos que aparezca al visitarla, pudiendo ser:
			Noticia politica.
			Noticia economica.
			Noticia deportiva.
			Mediante tres objetos de tipo radio, permitir seleccionar que titular debe mostrar el periodico.
			Almacenar en una cookie el tipo de titutal que desea ver el cliente. La primera vez que visita el sitio
			deben aparecer los tres titulares.
					-->
	</head>
	<body>
		<form action="practica35-2.php" method="post">

			<input type="radio" name="opcion" value="NoticiaPolitica">Noticia Politica</Label>
			<br/>
			<input type="radio" name="opcion" value="NoticiaEconomica">Noticia Economica</Label>
			<br/>
			<input type="radio" name="opcion" value="NoticiaDeportiva">Noticia Deportiva</Label>
			<br/>
			
			<input type="submit" name="enviar" value="enviar">
		</form>
	</body>
</html>