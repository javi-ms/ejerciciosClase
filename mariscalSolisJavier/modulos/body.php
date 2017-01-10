<div id=tablaUno align="center">		
		<table border="">
			<form action=" " method="POST"></form>
			<tr>
				<td><label>Usuario</label></td>
				<td><input type="text" name="nameLogin"></td>
			</tr>	
			<tr>
				<td><label>Contraseña</label></td>
				<td><input type="password" name="passLogin"></td>
			</tr>	
			<tr>
				<td><label>Perfil</label></td>
				<td><input type="text" name="perfil" value="Admin o Agente"></td>
			</tr>
			<tr>
				<td><input type="submit" name="sentLogin" value="Logear"></td>
			</tr>
				<td class="derechaAl"><a href="<?php echo 'index.php?page=/anadirUser'; ?>">Registro de agentes</a></td>
				<td class="derechaAl"><a href="<?php echo 'index.php?page=/agentes'; ?>">Agentes</a></td>
		</table>
	</div>
