<?php
return [
    "route" => [
        "/" => "controllers/home/home.controller.php",
        "/search" => "controllers/search/search.controller.php",
        "/login" => "controllers/login/login.controller.php",
        "/logout" => "controllers/login/login.controller.php",
        "/404"=> "views/pages/error/404.php"
    ],
    "databaseInfo" => [
        "dsn" => [
            "host" => "php-database.c9wmosguks3w.ap-southeast-1.rds.amazonaws.com",
            "dbname" => "concert_ticket",
            "port" => "3306",
        ],
        "user" => "admin",
        "password" => "Iseeyou1234"
    ]
];
