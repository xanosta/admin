<?php

    return [

        'database' => [

            'connection' => 'mysql:host=localhost',
            'name' => 'db_gms_site',
            'username' => 'root',
            'password' => '',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::ATTR_EMULATE_PREPARES => false 

            ]

        ]
    ];