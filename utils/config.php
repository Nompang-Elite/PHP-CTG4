<?php
return [
    "route" => [
        "/" => "controllers/home/home.controller.php",
        "/search" => "controllers/search/search.controller.php",
        "/login" => "controllers/login/login.controller.php",
        "/register" => "controllers/register/register.controller.php",
        "/logout" => "controllers/login/login.controller.php",
        "/account" => "controllers\account\account.controller.php",
        "/404" => "views/pages/error/404.php",
        "/details"=>"controllers/details/details.controller.php"
    ],
    "databaseInfoOnline" => [
        "dsn" => [
            "host" => "php-database.c9wmosguks3w.ap-southeast-1.rds.amazonaws.com",
            "dbname" => "ticket_app",
            "port" => "3306",
        ],
        "user" => "admin",
        "password" => "Iseeyou1234"
    ],
    "databaseInfoLocal" => [
        "dsn" => [
            "host" => "localhost",
            "dbname" => "ticket_app",
            "port" => "3306",
        ],
        "user" => "root",
        "password" => "1234!@#$"
    ]
];
