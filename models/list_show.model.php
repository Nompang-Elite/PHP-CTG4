<?php


// function to get data of show and return : array
function getShowData(Database $db): array
{
    // query to select data of show from database
    $db->query(
        "SELECT * FROM shows JOIN tickets JOIN venues JOIN images
        WHERE  shows.id = tickets.show_id AND venues.id = tickets.venue_id AND shows.image_id = images.id"
    );

    // return all data of show
    return $db->getAll();
}
