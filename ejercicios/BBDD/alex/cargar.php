<?php

include './Conexion.php';
include './Consultas.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


    $consultas = new Consultas();
    
    $filas = $consultas->mostrar();
    
    echo "<table> \n"
    .       "<tr> \n"
            .   " \n<th>Nombre</th> \n"
            .   " \n<th>Apellidos</th> \n"
            . "</tr> \n";
            
            foreach ($filas as $key) {
                echo "<tr> \n";
                echo "<td>" . $key['nombre'] . "</td> \n";
                echo "<td>" . $key['apellidos'] . "</td> \n";
                
            }
            
            echo "</table>";