<?php
session_start();
// Import config:
$config = require_once("utils/config.php");
// Import debug:
require_once("utils/debug.php");
// Import Database:
require_once("database/Database.php");
// Import Users:
require_once("models/Users.php");
// Import validation:
require_once("models/validation.model.php");
// Import router:
require_once("router.php");
// Import ListShow:
require_once("models/list_show.model.php");
// Getting URI path from server
$uri = $_SERVER["REQUEST_URI"];
// Routing Page to based on URI
routeToPage($uri, $config["route"]);
