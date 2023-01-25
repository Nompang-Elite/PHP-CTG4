<?php

return [
    "route" => [
        "/" => "views/home/home.view.php",
        "/search" => "views/search/search.view.php",
        "/login" => "views\login\login.view.php",
    ],
    "databaseInfo" => [
        "host" => "php-database.c9wmosguks3w.ap-southeast-1.rds.amazonaws.com",
        "dbname" => "concert_ticket",
        "port" => "3306"
    ]
];
