<?php

// dump_die($username);
// dump_die($_SESSION);
$first_name = $_SESSION["activeUser"]["first_name"];
$last_name = $_SESSION["activeUser"]["last_name"];
$username = $_SESSION["activeUser"]["username"];
$email = $_SESSION["activeUser"]["email"];
$birth_date = $_SESSION["activeUser"]["birth_date"];
require("./views/pages/account/account.view.php");