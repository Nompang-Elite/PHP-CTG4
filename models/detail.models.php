<?php

function getShowDetail(Database $db, string $showId): array
{
    $q = "SELECT app_db.schedules.date, app_db.shows.title, app_db.images.image, app_db.venues.address, app_db.tickets.price, app_db.shows.description 
    FROM app_db.schedules 
    JOIN app_db.tickets 
    JOIN app_db.shows 
    JOIN app_db.venues 
    JOIN app_db.images
    ON (app_db.schedules.ticket_id = app_db.tickets.id) 
    AND  (app_db.shows.id = app_db.tickets.show_id )
    AND (app_db.images.id = shows.image_id)
    AND (app_db.venues.id  = app_db.tickets.venue_id) AND app_db.shows.id = :id ;";

    $db->query($q, [":id" => $showId]);
    return $db->getAll();
}
