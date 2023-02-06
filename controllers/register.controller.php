<?php
// Import config file:
$config = require("./utils/config.php");
// Import and declare database:
$db = new Database($config["database"]["online"]);
// Declare user object:
$user = new Users($db);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST)) {
    if (
        isset($_POST["firstName"]) &&
        isset($_POST["lastName"]) &&
        isset($_POST["username"]) &&
        isset($_POST["email"]) &&
        isset($_POST["password"]) &&
        isset($_POST["birthDate"]) &&
        isset($_POST["gender"])
    
    ) {
        $registerInfo = [
            "firstName" => $_POST["firstName"],
            "lastName" => $_POST["lastName"],
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" => $_POST["password"],
            "gender" => $_POST["gender"],
            "birthDate" => $_POST["birthDate"],
        ];
        $user->register($registerInfo);
    }
}

require './views/pages/register/register.view.php';
