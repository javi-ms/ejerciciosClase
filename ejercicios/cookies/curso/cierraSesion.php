<?php
	
	session_start();
	session_unset();
	session_destroy();
	echo "se ha cerrado la sesion";
?>