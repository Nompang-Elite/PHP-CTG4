<?php
$config = require("./utils/config.php");
require("./database/Database.php");

// Create new database
$db = new Database($config['database']['online']);

// function to get data of show and return : array
function getShowData(Database $db): array
{
    // query to select data of show from database
    $db->query("SELECT * FROM shows");
    
    // return all data of show
    return $db->getAll();
}
