<?php

//Clase que se encarga de realizar consultas contra la base de datos

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {

        $this->pdo = $pdo;
    }


    public function selectAllBlogs($country, $language) {

        $this->pdo->query("SET NAMES 'utf8'");

        $statement = $this->pdo->prepare(
                                "SELECT * from db_gms_site.posts 
                                WHERE country = '$country' AND language = '$language' 
                                ORDER BY id DESC"
                                );
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}