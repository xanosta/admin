<?php

//Clase que se encarga de crear la conexion

class Connection {

    /**
     * Funcion estática que devuelve una conexion de tipo PDO
     * @param $config parámetros para configurar la conexion. config.php
     */
    public static function make($config) {

        try {
 
            return new PDO(

                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
    
        } catch (PDOException $e) {
    
            die($e->getMessage());
            
        }
    }
}