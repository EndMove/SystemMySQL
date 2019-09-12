<?php
/*
========SystemMySQL========
(c) 2018-2019 MelEnd-Studio
+++++++++++++++++++++++++++
Dernière MAJ le: 06-09-2019
===========================
Fichier: config.php
Version: 1.1
*/
$error_action = "load";                     // En cas d'erreur: (1: redirection http 'redirect', 2: afficher erreur 'load')
$error_url = "https://melend-studio.eu/";   // Url pour la redirection http en cas d'erreur (uniquement en mode 'redirect')

$logs_file = "logs/api_sql.log";            // Chemin du fichier de logs depuis la racine du site web

$bases_MySQL = [                            // Liste des bases de données MySQL
    1 => [
        "status" => true,
        "prefix" => "bdd1",
        "type" => "pdo",
        "charset" => "utf8",
        "username" => "root",
        "password" => "",
        "hostname" => "localhost",
        "databasename" => "system_test",
        "port" => 3306
    ],
    2 => [
        "status" => true,
        "prefix" => "bdd2",
        "type" => "mysqli",
        "charset" => "utf8",
        "username" => "root",
        "password" => "",
        "hostname" => "localhost",
        "databasename" => "system_test",
        "port" => 3306
    ]
];