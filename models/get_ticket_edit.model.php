<?php
function getShowEdit(Database $db, string $showId)
{
    $q = "SELECT * FROM tickets JOIN shows JOIN venues JOIN images JOIN schedules
        WHERE tickets.id = :id AND tickets.show_id = shows.id AND
        shows.image_id = images.id AND tickets.venue_id = venues.id
        AND schedules.ticket_id = :id;
    ";

    $db->query($q, [":id" => $showId]);
    return $db->get();
}
