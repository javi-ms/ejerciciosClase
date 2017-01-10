
<?php
$base = array("naranja", "plátano", "manzana", "frambuesa");
$reemplazos = array(0 => "piña", 4 => "cereza");
$reemplazos2 = array(0 => "castaña");

$cesta = array_replace($base, $reemplazos, $reemplazos2);
print_r($cesta);
?>
