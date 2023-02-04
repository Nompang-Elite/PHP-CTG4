<?php
// Import config file:
$config = require("./utils/config.php");
// Import and declare database:
$db = new Database($config["database"]["online"]);
// Declare user object:
$user = new Users($db);
// Check for the post method:
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Check if $post values is set or declare:
    if (isset($_POST["email"]) && isset($_POST["pass"])) {
        // Login user in:
        $user->login($_POST["email"], $_POST["pass"]);
    }
}
// Check for the user logout:
parse_url($_SERVER["REQUEST_URI"])["path"] === "/logout" ? $user->logout() : null;

require './views/pages/login/login.view.php';
