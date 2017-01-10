<?php

 
	
	echo "<form action='#' method='post'>";
		echo "<input type='text' name='palabra'>";
		echo "<input type='text' name='palabra2'>";
		echo "<input type='submit' name='recoger' value='recoger'>";
	echo "</form>";

	if(isset($_POST["recoger"])){  
			echo "<br/>".substr($_POST['palabra'],0,2);
			echo substr($_POST['palabra2'],0,2);
	}
			
?>