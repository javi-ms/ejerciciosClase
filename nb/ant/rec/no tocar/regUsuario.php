<?php
	/*$_SESSION['usReg']=array();*/
	if (isset($_POST['registrar'])) {

		/*guardar en array*/
		$_SESSION['usReg'][]=array('user'=>$_POST['user'], 'pass'=>$_POST['pass']);
			header('Location: index.php');
		/*echo "user registrado";*/
		header('Location: index.php');
	}
/*
	if (isset($_POST['comprobar'])) {
	print_r($_SESSION);
	}
*/
?>