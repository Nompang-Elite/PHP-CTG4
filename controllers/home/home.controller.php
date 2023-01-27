<?php
// Import config files:
$config = require("utils/config.php");
// Establish database connection:
$db = new Database($config["databaseInfo"]);
// Check if the user is logged in:
$user = checkUserLogin($db);

if (isset($_SESSION["user"])) {
    $userInfo = $_SESSION["user"];
    $username = "{$userInfo["username"]}";
    // dump_die($userInfo);
}

// require("models/list_show.model.php");
// $show_list = getTheAvailableShow($db);
// dump_die($show_list);

require("views/pages/home/home.view.php");
