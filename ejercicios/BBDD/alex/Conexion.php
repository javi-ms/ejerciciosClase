<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Clase para establecer la conexión con la base de datos
 *
 * @author aleja
 */
class Conexion {
    public function get_conexion() {
        
        //Parametros para la BD
        $user = "root";
        $pass = "";
        $host = "localhost";
        $db = "prueba";
        
        $conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
        return $conexion;
    }
}
