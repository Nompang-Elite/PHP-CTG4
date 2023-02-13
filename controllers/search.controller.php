<?php

if (isset($_POST) && !empty($_POST)) {
    // Import config file:
    $config = require("./utils/config.php");
    // Import and declare database:
    $db = new Database($config["database"]["online"]);
    // print_r(search($db, $_POST['value']));
    // dump_die($shows);
    require('./views/pages/search_result.view.php');
} else
    require('./views/pages/search.view.php');
