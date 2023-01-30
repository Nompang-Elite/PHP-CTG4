<?php
return [
    "route" => [
        "/" => "controllers/home/home.controller.php",
        "/login" => "controllers/login/login.controller.php",
        "/register" => "controllers/register/register.controller.php",
        "/logout" => "controllers/login/login.controller.php",
    ],
    "database" => [
        // Online Database Connection
        "online" => [
            "host" => "php-database.c9wmosguks3w.ap-southeast-1.rds.amazonaws.com",
            "dbname" => "ticket_app",
            "user" => "admin",
            "pass" => "Iseeyou1234",
            "port" => "3306",
        ],
        // Offline Database Connection
        "offline" => [
            "host" => "",
            "dbname" => "",
            "user" => "",
            "pass" => "",
            "port" => "",
        ]
    ]
];
