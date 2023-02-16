<?php
function search(Database $db, $input)
{
    // select data from database
    $db->query("SELECT  app_db.shows.title,app_db.venues.address, app_db.images.image, app_db.tickets.price, app_db.tickets.show_id, app_db.shows.description 
    
    FROM shows JOIN tickets JOIN images JOIN venues WHERE shows.id = tickets.show_id AND venues.id = tickets.venue_id AND shows.image_id = images.id AND shows.title LIKE :names ", [":names" =>  "%" . "{$input}" . "%"]);
    // get data from database
    return $db->getAll();
}
