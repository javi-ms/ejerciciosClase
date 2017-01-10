<?php
/**
*tablero de Hundir la flota
*
*
*/
 $tablero = array (
  "0"=>array ("__", "__", "__","__","__","__","__","__","__","__"),
  "1"=>array ("O ", "O ", "O ","O ","B ","B ","B ","B ","O ","O "),
  "2"=>array ("O ", "O ", "B ","O ","O ","O ","O ","O ","O ","O "),
  "3"=>array ("O ", "O ", "B ","O ","O ","O ","O ","O ","O ","O "),
  "4"=>array ("O ", "O ", "B ","O ","O ","O ","O ","O ","O ","O "),
  "5"=>array ("O ", "O ", "O ","O ","O ","O ","O ","O ","O ","O "),
  "6"=>array ("O ", "O ", "O ","B","B ","O ","O ","O ","O ","O "),
  "7"=>array ("O ", "B ", "O ","O ","O ","O ","O ","O ","O ","O "),
  "8"=>array ("O ", "O ", "O ","O ","O ","O ","O ","O ","O ","O "),
  "9"=>array ("O ", "O ", "O ","O ","B ","B ","B ","B ","O ","O "),
  "10"=>array ("O ", "O ", "O ","O ","O ","B ","O ","O ","O ","O "),
  "11"=>array ("__", "__", "__","__","__","__","__","__","__","__"),
  "12"=>array ("A", "B", "C","D","E","F","G","H","I","J")
 );
 
  foreach ($tablero as $indice1 => $datos) {
	if($indice1 == 0 || $indice1 == 11){
		echo "|";
    }else{
      if($indice1 != 10 && $indice1 != 12){
        echo $indice1 ."==> | ";
      }else{
        echo $indice1 ."=> | ";
      } 
      
    }
    foreach ($datos as $indice => $casilla) {
      if($indice1 == 12){
        echo $casilla ."-";
      }else{
        echo $casilla ." ";
      }   
    }
    echo " | <br />";
  }
	echo "<br/><a href=\"vercodigo.php?src=tableroBarcos.php\">ver codigo</a>";
?>