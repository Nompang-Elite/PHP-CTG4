<?php
// Regex Pattern
$namePattern = "/^[a-zA-Z0-9]{1,40}$/";
$passPattern = "/^[a-zA-Z0-9]{8,}$/";
// 
// dump_die(preg_match($namePattern, $value));
if ($_SERVER["REQUEST_METHOD"] === "POST" && (isset($_POST) && ($_POST !== "" && $_POST !== null))) {
    $userInfo = sanitizeValue([
        "firstName" => $_POST["firstName"],
        "lastName" => $_POST["lastName"],
        "username" => $_POST["username"],
        "email" => $_POST["email"],
        "password" => $_POST["passwordCreate"],
        "gender" => $_POST["gender"],
        "birthDate" => $_POST["birthDate"],
    ]);
    // dump_die(preg_match($passPattern, $userInfo["password"]));
    if (
        preg_match($namePattern, $userInfo["firstName"]) &&
        preg_match($namePattern, $userInfo["lastName"]) &&
        preg_match($namePattern, $userInfo["username"]) &&
        preg_match($passPattern, $userInfo["password"])
    ) {
        dump_die($userInfo);
        $config = require("utils/config.php");
        $db = new Database($config["databaseInfoOnline"]);
        $user = new Users($db);
        $user->register($userInfo);
    } else {
        echo "Wrong!!!";
    }
}

require("views/pages/register/register.view.php");
