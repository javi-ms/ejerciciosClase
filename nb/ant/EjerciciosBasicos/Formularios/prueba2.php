<?php

  if(isset($_POST["Submit"])) 
  { 
      if(isset($_POST["checkbox"][0])) 
          echo "Selecciono la primer opcion con valor = ".$_POST["checkbox"][0]."<br />"; 
       
      if(isset($_POST["checkbox"][1])) 
          echo "Selecciono la segunda opcion con valor = ".$_POST["checkbox"][1]."<br />"; 
       
      if(isset($_POST["checkbox"][2])) 
          echo "Selecciono la tercera opcion con valor = ".$_POST["checkbox"][2]."<br />"; 
      
if(isset($_POST["checkbox"][3])) 
          echo "Selecciono la tercera opcion con valor = ".$_POST["checkbox"][3]."<br />";

if(isset($_POST["checkbox"][4])) 
          echo "Selecciono la tercera opcion con valor = ".$_POST["checkbox"][4]."<br />"; 
if(isset($_POST["checkbox"][5])) 
          echo "Selecciono la tercera opcion con valor = ".$_POST["checkbox"][5]."<br />"; 

  } 
?>