<?php
session_start();
// Import debug function:
require_once("utils/debug.php");
// Import configuration file:
$config = require("utils/config.php");
// Import database module:
require_once("database/Database.php");
// Import page router:
require_once("router.php");
require_once("models/login.model.php");
// Route to page:
routeToPage($uri, $config["route"]);
// Establish Database: