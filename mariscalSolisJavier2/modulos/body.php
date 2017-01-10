<!--
	Necesitamos mostrar:
		id de la multa
		id del agente
		Descripcion de la multa
		fecha
		El Importe
		Estado
-->		
<div id=tablaUno align="center">		
	<table>
		<tr>
			<th>Id</th>
			<th>IdAgente</th>
			<th>Descripcion</th>
			<th>Fecha</th>
			<th>Importe</th>
			<th>Estado</th>
		</tr>
		<?php foreach ($_SESSION['multas'] as $key => $multas): ?>
			<tr>
				<td><?php echo $key ?></td>
				<td><?php echo $multa['idAagente']?></td>
				<td><?php echo $multa['matricula']?></td>
				<td><?php echo $multa['descripcion']?></td>
				<td><?php echo $multa['fecha']?></td>
				<td><?php echo $multa['importe']?></td>
				<td><?php echo $multa['estado']?></td>
			</tr>
		<?php endforeach ?>
	</table>
</div>