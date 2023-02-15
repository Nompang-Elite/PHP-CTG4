<?php
$config  = require("./utils/config.php");
// Create new database
$db = new Database($config['database']['online']);
if ($_SESSION["activeUser"]) {
    $userId = $_SESSION["activeUser"]["id"];
    $shows = getSellerShows($db, $userId);
}
require("./views/pages/seller_dashbaord.view.php");
