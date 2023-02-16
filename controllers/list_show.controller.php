<?php
// Import coniguration:
$config = require("./utils/config.php");
// Create new database:
$db = new Database($config['database']['online']);
$shows = getShowData($db);
// dump_die($shows);
require('./views/pages/list_show.views.php');
