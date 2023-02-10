<?php
// Site Header:
$header = 'Ticketo';
// Import coniguration:
$config = require("./utils/config.php");
// Create new database:
$db = new Database($config['database']['online']);
require('./views/pages/list_show.views.php');
