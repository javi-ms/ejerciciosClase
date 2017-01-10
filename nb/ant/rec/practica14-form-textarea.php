<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<!--
		Confeccionar una pagina que muestre un contrato dentro de un textarea, disponer puntos suspensivos
		donde el operador debe ingresar un texto. La pagina que procesa el formulario solo debe mostrar el
		contrato con las modificaciones que hizo el operador.
		Ej. De un contrato puede ser:
		En la ciudad de [……..], se acuerda entre la Empresa [……..] representada por el Sr. [……..] en su carácter
		de Apoderado, con domicilio en la calle [……..] y el Sr. [……..], futuro empleado con domicilio en [……..],
		celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93,
		94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
		-->
	</head>

	<body>
		<form action="#" method="POST">
			<textarea name="texto" rows="15" cols="100">Confeccionar una pagina que muestre un contrato dentro de un textarea, disponer puntos suspensivos
		donde el operador debe ingresar un texto. La pagina que procesa el formulario solo debe mostrar el contrato con las modificaciones que hizo el operador.
		Ej. De un contrato puede ser:
		En la ciudad de [……..], se acuerda entre la Empresa [……..] representada por el Sr. [……..] en su carácter de Apoderado, con domicilio en la calle [……..] y el Sr. [……..], futuro empleado con domicilio en [……..], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.</textarea>
			<input type="submit" name="enviar">
		</form>
		<?php 
			if (isset($_POST['enviar'])) {			
				echo "El curriculum:".$_REQUEST['texto']; 
			}
  ?>
	</body>
</html>