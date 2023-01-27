<?php
// Import config files:
$config = require("utils/config.php");
// Establish database connection:
$db = new Database($config["databaseInfo"]);
// Create a user object:
$user = new Users($db);
// Validate the login:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["email"]) and !empty($_POST["pass"])) {
        if ($user->login($_POST["email"], $_POST["pass"])) {
            header("Location: /");
        }
    }
}

if (parse_url($_SERVER["REQUEST_URI"])["path"] === "/logout") {
    $user->logout();
    routeToPage("/", $config["route"]);
} else
    require("views/pages/login/login.view.php");
