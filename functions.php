<?php


/**
 * Funcion que se encarga de interrumpir la ejecucion del programa y mostrar los datos
 * @param $data: datos que queremos mostrar
 */
function dd($data) {

    echo "<pre>";
        die(var_dump($data));
    echo "</pre>";
}

/**
 * Funcion que se encarga de cambiar de forma dinamica los titulos en funcion de la URI
 * @param $route: le pasamos la URI solicitada
 */
function changeTitles($route) {

    if($route === '/' || $route === '/blogs') {

        $btnTitle = 'Create blog';
        $title = 'BLOG LIST';
        $tableTitle = 'Blog title';

        return $titles = [$btnTitle, $title, $tableTitle];
    }

    if($route === '/picks') {

        $btnTitle = 'Create pick';
        $title = 'PICK LIST';
        $tableTitle = 'Pick title';

        return $titles = [$btnTitle, $title, $tableTitle];
    }
}


