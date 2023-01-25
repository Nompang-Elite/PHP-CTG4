<?php
// Import configuration file:
$configure = require("utils/config.php");
// Import Function:
require("utils/function.php");
// Import page router:
require("router.php");
// Import database module:
require("database/Database.php");

// Establish database connection:
$myDatabase = new Database($configure["databaseInfo"], "admin", "Iseeyou1234");