<?php
// function to get data of shows and return : array
function getSellerShows(Database $db, $id): array
{
    // query to select data of show from database
    $db->query(
        "SELECT * FROM schedules JOIN shows JOIN tickets JOIN venues JOIN images
        WHERE tickets.id = schedules.ticket_id AND shows.id = tickets.show_id
        AND venues.id = tickets.venue_id AND shows.image_id = images.id
        AND tickets.seller_id = :id
        ",
        [
            ":id" => $id
        ]
    );
    // return all data of shows
    return $db->getAll();
}
