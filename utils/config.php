<?php
// Configuration FIles
// This file contains the configuration for the site
return [
    "route" => [
        // Router Path
        "/" => "./controllers/home.controller.php",
        "/login" => "./controllers/login.controller.php",
        "/logout" => "./controllers/login.controller.php",
        "/register" => "./controllers/register.controller.php",
        "/account" => "./controllers/account.controller.php",
        "/details" => "./controllers/detail.controller.php",
        "/search" => "./controllers/search.controller.php",
        "/home" => "./controllers/list_show.controller.php",
        "/addShow" => "./controllers/add_show.controller.php"
    ],
    "database" => [
        // Offline is for the local connection to DB
        "online_" => [
            "dsn" => [
                "host" => "localhost",
                "dbname" => "app_db",
                "port" => "3306",
            ],
            "user" => [
                "name" => "root",
                "password" => "1234!@#$",
            ]
        ],
        // Online is for the online connection to DB
        "online" => [
            "dsn" => [
                "host" => "php-database.c9wmosguks3w.ap-southeast-1.rds.amazonaws.com",
                "dbname" => "app_db",
                "port" => "3306",
            ],
            "user" => [
                "name" => "admin",
                "password" => "Iseeyou1234"
            ]
        ]
    ]
];
