<?php
$config = require("./utils/config.php");
// Create new database
$db = new Database($config['database']['online']);
require("./views/pages/home/home.view.php");
