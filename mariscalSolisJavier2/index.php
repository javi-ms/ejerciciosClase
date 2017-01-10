<?php
	require_once "modulos/header.php";

?>

<?php 
if (!isset($_GET['page'])) {
	include ('modulos/body.php');
}else{
	include ('modulos/'.$_GET['page'].'.php');
}
?>
<?php
	require_once "modulos/footer.php";
?>