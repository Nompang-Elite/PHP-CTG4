<?php
// Import config files:
$config = require("utils/config.php");
// Establish database connection:
$db = new Database($config["databaseInfo"]);
// Check if the user is logged in:
if (isset($_SESSION["user"]["logged"]) and $_SESSION["user"]["logged"] === true) {
    $userActivate = $_SESSION["user"]["logged"];
    $user = new Users($db);
}

if (isset($_SESSION["user"])) {
    $userInfo = $_SESSION["user"];
    $username = "{$userInfo["Last_name"]}";
}
require("views/pages/home/home.view.php");
