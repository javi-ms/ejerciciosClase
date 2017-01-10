<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Consultas
 *
 * @author aleja
 */
class Consultas {
    public function insertar($nombre, $apellidos) {
       $modelo = new Conexion();
       
       $conexion = $modelo->get_conexion();
       
       $sql = "insert into tbprueba(nombre,apellidos) values(:nombre, :apellidos)";
       
       //Preparo la consulta para evitar el SQLInyection con el metodo prepare
       $statement = $conexion->prepare($sql);
       
       //Bindeamos los parametros para sustituir los parametros con : por su valor
       $statement->bindParam(":nombre", $nombre);
       $statement->bindParam(":apellidos", $apellidos);
       
       if(!$statement) {
           return "Error al crear el registro";
       } else {
           $statement->execute();
           return "Registro creado correctamente";
       }
    }
    
    public function mostrar() {
        $filas = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql = "select * from tbprueba";
        
        $statement = $conexion->prepare($sql);
        
        $statement->execute();
        
        while($resultado = $statement->fetch() ) {
            $filas[] = $resultado;
        }
        
        return $filas;
    }
}
