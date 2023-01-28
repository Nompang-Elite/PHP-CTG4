<?php

function getTheAvailableShow(Database $db)
{
    $statement = $db->query("SELECT * FROM Shows;");
    $list = $statement->fetchAll();
    // dump_die($list); // Use this to debugs
    return $list;
}
