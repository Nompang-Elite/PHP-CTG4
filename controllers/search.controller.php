<?php

if (isset($_POST) && !empty($_POST)) {
    // Import config file:
    $config = require("./utils/config.php");
    // Import and declare database:
    $db = new Database($config["database"]["online"]);
    // print_r(search($db, $_POST['value']));
    $shows = search($db, $_POST['value']);
    require('./controllers/list_show.controller.php');
} else
    require('./views/pages/search.view.php');
