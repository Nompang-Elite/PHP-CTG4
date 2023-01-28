<?php
require("views/pages/register/register.view.php");
$config = require("utils/config.php");

// Establish database connection:
// $db = new Database($config["databaseInfoLocal"]); // This is for the local
$db = new Database($config["databaseInfoOnline"]); // This is for the online

// Create a user object:
$user = new Users($db);
