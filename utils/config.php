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
        "/search" => ""
    ],
    "database" => [
        // Offline is for the local connection to DB
        "offline" => [
            "host" => "z",
            "dbname" => "",
            "port" => "3306",
            "user" => "",
            "password" => "",
        ],
        // Online is for the online connection to DB
        "online" => [
            "host" => "php-database.c9wmosguks3w.ap-southeast-1.rds.amazonaws.com",
            "dbname" => "app_db",
            "port" => "3306",
            "user" => "admin",
            "password" => "Iseeyou1234"
        ]
    ]
];
