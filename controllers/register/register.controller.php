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
        "password" => $_POST["createPass"],
        "confirmPass" => $_POST["confirmPass"],
    ]);
    // dump_die(preg_match($passPattern, $userInfo["password"]));
    if (
        preg_match($namePattern, $userInfo["firstName"]) &&
        preg_match($namePattern, $userInfo["lastName"]) &&
        preg_match($namePattern, $userInfo["username"]) &&
        preg_match($passPattern, $userInfo["password"]) &&
        $userInfo["password"] === $userInfo["confirmPass"] 
    ) {
        // dump_die($userInfo);
        $config = require("utils/config.php");
        $db = new Database($config["databaseInfoOnline"]);
        $user = new Users($db);
        $user->register($userInfo);
        routeToPage("/", $config["route"]);
    } else {
        echo "Wrong!!!";
    }
}

require("views/pages/register/register.view.php");
