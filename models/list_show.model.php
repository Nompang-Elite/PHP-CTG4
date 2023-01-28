<?php

function getTheAvailableShow(Database $db)
{
    /* Get the available show from database:
     * @param type Database $db
     * @return type array 
     */
    $statement = $db->query("SELECT * FROM Shows;");
    $list = $statement->fetchAll();
    // dump_die($list); // Use this to debugs
    return $list;
}
