<?php
// Import configer
$config  = require("../utils/config.php");
// Create new database
$db = new Database($config['database']['online']);

$shows = getSellerShows($db);
// dump_die($shows);
require("./views/pages/seller_dashbaord.view.php");
