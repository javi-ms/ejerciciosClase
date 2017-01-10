<?php
	session_start();

	if (!isset($_SESSION["usuario"])) {
		$_SESSION["usuario"]="invitado";

//		al logearse grabar en variable de session y comprobar quer existe
	}
?>
<form action="home.php" method="POST">
	<table align="center">
		<th>LOGIN</th>
		<tr>
			<td>
				<input type="text" name="nameLogin">
			</td>
		</tr>
		<tr>
			<td align="right">
				<input type="password" name="passLogin" >
			</td>
			<td rowspan="2">
				<input type="submit" name="login" value="login">
			</td>
		</tr>

	</table>
</form>
