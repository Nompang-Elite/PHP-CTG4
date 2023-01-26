<?php
session_start();
// Import configuration file:
$configure = require("utils/config.php");
// Import database module:
require("database/Database.php");
// Import Function:
require("utils/function.php");
// Import page router:
require("router.php");
// Route to page:
routeToPage($uri, $configure["route"]);
