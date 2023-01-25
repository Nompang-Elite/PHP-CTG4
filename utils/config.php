<?php

return [
    "route" => [
        "/" => "controllers/home/home.controller.php",
        "/search" => "views/search/search.view.php",
        "/login" => "controllers/login/login.controller.php",
    ],
    "databaseInfo" => [
        "host" => "php-database.c9wmosguks3w.ap-southeast-1.rds.amazonaws.com",
        "dbname" => "concert_ticket",
        "port" => "3306"
    ]
];
