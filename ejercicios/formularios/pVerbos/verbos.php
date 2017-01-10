<?php
	$celdas=0;
	$bandera = true;
	$errores = array();
	$verbo = array(	array('ser/estar','be','was/were','been'),
					array('volver','become','became','become'),
					array('empezar','begin','began','begun'),
					array('morder','bite','bit','bit'),
					array('sangrar','Bleed','bled','bled')
					);
	
	if (isset($_POST['enviar'])) {
		//si no es cantidad y esta vacio sale ese error
		if (!isset($_POST['cantidad'])||empty($_POST['cantidad'])) {
			$errores[]="no existe la cantidad";
			$bandera = false;
		}
		//si cantidad no es un numero sale ese error
		if (!is_numeric($_POST['cantidad'])) {
			$errores[] = "no es un numero";
			$bandera = false;
		}
		if ($bandera == true) {
			$cantidad = $_POST['cantidad'];
			$filasmaximas = count($verbo);
			for ($i=0; $i < $cantidad; $i++) { 
				$indices[rand(0,$filasmaximas-1)]=array();
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div>

		<!--Muestra si hay errores-->
			<?php foreach ($errores as $error): ?>
				<div><?php echo $error ?></div>
			<?php endforeach ?>
		</div>
		<?php if (isset($_POST['enviar'])): ?>
			<table>
			<tr>
				<th>Traduccion Español</th>
				<th>Present</th>
				<th>Past simple</th>
				<th>Participle</th>
			</tr>
			<?php for($i=0;$i<$cantidad;$i++ ):?>
				<tr>
					<?php foreach ($verbo[$i] as $valor): ?>
						<td><?php echo $valor ?></td>
					<?php endforeach ?>
				</tr>
			<?php endfor ?>
		</table>
		<?php endif ?>
	</body>
</html>
