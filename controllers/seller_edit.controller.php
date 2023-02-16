<?php
$config  = require("./utils/config.php");
// Create new database
$db = new Database($config['database']['online']);
$showId = $_GET['ticketId'];
if (isset($showId))
{
    $showTicket = getShowEdit($db , $showId);
}

require("./views/pages/seller_edit.view.php");

