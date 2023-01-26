<?php
session_start();
// Import configuration file:
$configure = require("utils/config.php");
// Import database module:
require_once("database/Database.php");
// Import Function:
require_once("utils/debug.php");
// Import page router:
require_once("router.php");
// Route to page:
routeToPage($uri, $configure["route"]);
// Establish Database: