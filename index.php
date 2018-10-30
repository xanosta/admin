<?php


    //require 'functions.php';

    $query = require 'core/bootstrap.php';

    
    $router = new Router;

    require 'routes.php';

    $uri = trim($_SERVER['REQUEST_URI'], '/');

    require $router->direct($uri);



    /**
     * require Router::load('routes.php)
     *      ->direct($uri);
     */
   





































    /**
     * BUILT-IN FUNCTIONS
     * 
     * unset() Elimima un elemento de un array
     * unset($blogs['title']);
     * 
     * die()
     *  interrumpe la ejecucion del contexto
     * 
     * var_dump()
     *  imprime arrays, objetos
     * 
     * ucwords()
     *  primera palabra en mayusculas
     * 
     * htmlspecialchars()
     *  sanar los formularios
     * 
     * trim()
     *  quita espacios en blanco o caracteres especificados
     * 
     * PDO FUNCTIONS
     * 
     * prepare()
     *  prepara una sentencia sql
     * 
     * execute()
     *  ejecuta una sentencia preparada
     * 
     * fetchAll()
     *  devuelve un array con los valores rescatados al ejecutar una sentencia
     * 
     * */