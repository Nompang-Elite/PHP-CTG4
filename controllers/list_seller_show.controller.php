<?php
// Import configer
$config  = require("../utils/config.php");
// Create new database
$db = new Database($config[$config['database']['online']]);



require("./views/pages/seller_dashbaord.view.php");
