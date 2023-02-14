<?php
// function to get data of shows and return : array
function getSellerShows(Database $db): array
{
    // query to select data of show from database
    $db->query(
        "SELECT * FROM shows JOIN tickets JOIN venues JOIN images
        WHERE  shows.id = tickets.show_id AND venues.id = tickets.venue_id AND shows.image_id = images.id"
    );
    // return all data of shows
    return $db->getAll();
}