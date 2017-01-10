<?php
/*creacion y destruccion de cookies*/

	setcookie("user", "javier", time()+3600);


	setcookie("user", "", time()-3599);
?> 