<?php
$header = "Register";
// Import config file:
$config = require("utils/config.php");
// Import Database:
$db = new Database($config["database"]["online"]);
// Import User model:
$user = new User($db);

// POST method check:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["confirmPass"] === $_POST["password"] && !empty($_POST["password"])) {
        $user->register($_POST);
        // dum_die($_POST);
    }
}

require("views/pages/register/register.view.php");
