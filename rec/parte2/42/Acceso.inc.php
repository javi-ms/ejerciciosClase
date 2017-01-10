<?php
	$dp = @mysql_connect("localhost", "root", "usuario")
						 or die("<p>No se ha podido establecer la conexion con MySQL.</p>");

		  @mysql_select_db("AGENDA", $dp)
					 or die("<p>No se ha podido establecer la conexion con la base de datos.</p>");
?>