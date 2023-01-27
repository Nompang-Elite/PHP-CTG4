<?php

function getTheAvailableShow(Database $db)
{
    $statement = $db->query("SELECT * FROM Tickets INNER JOIN Shows");
    $list = $statement->fetch();
    return $list;
}
