<?php
// Import config files:
$config = require("utils/config.php");
// Establish database connection:
$db = new Database($config["databaseInfoOnline"]);
// Get session data:
$user = ["info" => $_SESSION["user"], "active" => $_SESSION["user"]["logged"]];

// Account contents:

$username = $user["info"]["username"];
$firstName = $user["info"]["first_name"];
$lastName = $user["info"]["last_name"];
$email = $user["info"]["email"];
$accountType = $user["info"]["type"];
















require("views/pages/account/account.view.php");
