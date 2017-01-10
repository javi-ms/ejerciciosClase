<?php
/**
*tablero de Hundir la flota
*
*
*/
 $tablero = array (
  "0"=>array ("0", "1", "1","0","0","0","0","0","0","0"),
  "1"=>array ("0", "0", "0","0","0","0","0","0","0","0"),
  "2"=>array ("0", "0", "0","0","0","0","0","0","0","0"),
  "3"=>array ("0", "0", "0","0","1","0","0","0","0","0"),
  "4"=>array ("0", "0", "0","0","1","0","0","0","0","0"),
  "5"=>array ("0", "0", "0","0","1","0","0","0","0","0"),
  "6"=>array ("0", "0", "0","0","0","0","0","0","0","0"),
  "7"=>array ("0", "0", "0","0","0","0","0","0","0","0"),
  "8"=>array ("0", "0", "0","0","0","0","0","0","0","0"),
  "9"=>array ("1", "1", "0","0","0","1","1","1","1","1") 
 );
  echo "<table> 
    <tr>
      <th></th>
      <th>a</th>
      <th>b</th>
      <th>c</th>
      <th>d</th>
      <th>e</th>
      <th>f</th>
      <th>g</th>
      <th>h</th>
      <th>i</th>
      <th>j</th>
    </tr>";
    //tablero hace referencia al indice que señala al $value 
    foreach ($tablero as $key=>$value) {
      /*th resalta*/
      //
      echo "<tr>
            <th>".$key."</th>";
      foreach ($value as $zona) {
        //mostrar array
        echo "<td>".$zona."</td>";
    }
  }
  echo "</table>";
  if ($tablero==0) {
    echo "<td bgcolor='blue'>"
  }

  
 /*
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
  */
	echo "<br/><a href=\"vercodigo.php?src=barcos2.php\">ver codigo</a>";
?>