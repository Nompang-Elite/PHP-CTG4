<?php
$header = "Sign In";
// Import config file:
$config = require("utils/config.php");
// Import Database:
$db = new Database($config["database"]["online"]);
// Import User model:
$user = new User($db);

// POST method check:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check user for login
    if (isset($_POST["password"]) && isset($_POST["email"])) {
        $login = $user->login($_POST["email"], $_POST["password"]);
        // $username = $_SESSION["user"]["username"];
        if (empty($login)) {
            $notFound = true;
        }
    }
}
// dum_die($_SERVER["REQUEST_URI"]);
if (isset($_SESSION) && isset($_SESSION["user"]["logged"])) {
    if ($_SERVER["REQUEST_URI"] === "/logout") {
        // dum_die($_SESSION);
        $user->logout();
    }
}



require("views/pages/login/login.view.php");
