<?php
// Import config files:
$config = require("utils/config.php");
// Establish database connection:
$db = new Database($config["databaseInfo"]);
// Get session data:
$user = ["info" => $_SESSION["user"], "active" => $_SESSION["user"]["logged"]];
require("views/pages/account/account.view.php");
