<?php

function getShowDetail(Database $db, string $showId): array
{
    $q = "SELECT app_db.schedules.date, app_db.shows.name, app_db.venues.address, app_db.tickets.price, app_db.shows.descriptions 
    FROM app_db.schedules 
    JOIN app_db.tickets 
    JOIN app_db.shows 
    JOIN app_db.venues 
    ON (app_db.schedules.ticket_id = app_db.tickets.id) 
    AND  (app_db.shows.id = app_db.tickets.show_id )
    AND (app_db.venues.id  = app_db.tickets.venue_id) AND app_db.shows.id = :id ;";

    $db->query($q, [":id" => $showId]);
    return $db->getAll();
}
