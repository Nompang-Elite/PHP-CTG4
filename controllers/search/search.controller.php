<?php
$config = require("utils/config.php");
// Establish database connection:
// $db = new Database($config["databaseInfoLocal"]);
$db = new Database($config["databaseInfoOnline"]);
$shows = getTheAvailableShow($db);
require("views/pages/search/search.view.php");
