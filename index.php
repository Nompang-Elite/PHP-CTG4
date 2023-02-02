<?php
// THIS IS THE MAIN FILE
// Import Config:
$config = require("./utils/config.php");
// Import Router:
require("./routers/router.php");
// Import Database:
require("./database/Database.php");
// Init Router:
$uri = parse_url($_SERVER["REQUEST_URI"])["path"]; // Get the URI path.
routeToPage($uri, $config["route"]);
