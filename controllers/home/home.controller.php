<?php
$header = "Home";
if (isset($_SESSION["user"]["logged"]) && $_SESSION["user"]["logged"] !== null) {
    $username = $_SESSION["user"]["username"];
}
$config = require("utils/config.php");
// Import Database:
$db = new Database($config["database"]["online"]);
$shows = getTheAvailableShow($db);
require("views/pages/home/home.view.php");
