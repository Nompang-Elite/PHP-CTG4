<?php

// For Logged user:
if (isset($_SESSION)) {
    if (isset($_SESSION["First_name"]) and isset($_SESSION["Last_name"])) {
        $username = "{$_SESSION["First_name"]} {$_SESSION["Last_name"]}";
    }
}
require("views/html/home/home.view.php");
