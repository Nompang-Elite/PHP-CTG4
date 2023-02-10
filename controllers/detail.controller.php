<?php
// Impoert Configuratoin:
$config = require("./utils/config.php");
// Create new database:
$db = new Database($config['database']['online']);
// dump_die($_GET);
if (isset($_GET['showId'])) {
    $showData = getShowDetail($db, $_GET['showId']);
    // dump_die($showData);
    $title = $showData[0]['name'];
    $address = $showData[0]['address'];
    $price = $showData[0]['price'];
    $descriptions = $showData[0]['descriptions'];
    $imageData = $showData[0]['image'];
    require("./views/pages/detail.views.php");
}
