<?php
// Configuration FIles
// This file contains the configuration for the site
return [
    "route" => [
        "/" => "./controllers/home.controller.php"
    ],
    "database" => [
        // Offline is for the local connection to DB
        "offline" => [
            "host" => "",
            "dbname" => "",
            "port" => "3306",
            "user" => "",
            "password" => "",
        ],
        // Online is for the online connection to DB
        "online" => [
            "host" => "php-database.c9wmosguks3w.ap-southeast-1.rds.amazonaws.com",
            "dbname" => "ticket_app",
            "port" => "3306",
            "user" => "admin",
            "password" => "Iseeyou1234"
        ]
    ]
];
