<?php
if ($_SERVER["REQUEST_URI"] === "/logout") {
    session_destroy();
    header("Location: /");
}
// Import User login model:
require("models/login.model.php");

// Import configuration file:
$config = require("utils/config.php");

// Start new Database connection:
$mydb = new Database($config["databaseInfo"]);

// Login page controller:
if ($_SERVER["REQUEST_METHOD"] === "POST" and (isset($_POST["email"]) and isset($_POST["password"]))) {
    if (!empty($_POST["email"]) and !empty($_POST["password"]) and (validateUserLogin($mydb, $_POST["email"], $_POST["password"]) !== false)) {
        header("Location: /");
    } else {
        $incorrect = "border-b-red-400";
        require("views/pages/login/login.view.php");
    }
} else
    require("views/pages/login/login.view.php");
