<?php
session_start();
// THIS IS THE MAIN FILE
// Import Debug Function:
require("./utils/debug.php");
// Import Validation Function:
require("./models/validation.model.php");
// Import Config:
$config = require("./utils/config.php");
// Import Router:
require("./routers/Router.php");
// Import Database:
require("./database/Database.php");
// Import Users model:
require("./models/Users.php");
// Import List Show model:
require("./models/list_show.model.php");
// Import Get Detail Show model:
require("./models/detail.models.php");
// Init Router:
$uri = parse_url($_SERVER["REQUEST_URI"])["path"]; // Get the URI path.
routeToPage($uri, $config["route"]);
