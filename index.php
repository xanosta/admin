<?php


    //require 'functions.php';

    $query = require 'bootstrap.php';

    $blogs = $query->selectAllBlogs('US', 'en');

    require 'view/index.view.php';

    
   





































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