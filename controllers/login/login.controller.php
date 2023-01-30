<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["email"] &&  $_POST["password"]) {
        $config = require("utils/config.php");
        $db = new Database($config["database"]["online"]);
        $user = new User($db);
        $validateLogin = $user->login($_POST["email"], $_POST["password"]);
    }
}




require("views/pages/login/login.view.php");
