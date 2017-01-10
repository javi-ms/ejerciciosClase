<?php
	action = 'new'
	action = 'edit'-id-key
	dlgUrl.php?action=new;

	if ($_GET[action]=new) {
		$url ='';
		$desc='';
	}else{
		$id = $_GET[id];
		$url = $_SESSION['urlUser'][$key]['url'];

	}


?>