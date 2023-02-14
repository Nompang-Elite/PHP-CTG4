<?php
$config  = require("./utils/config.php");
// Create new database
$db = new Database($config['database']['online']);

$shows = getSellerShows($db);
require("./views/pages/seller_dashbaord.view.php");
