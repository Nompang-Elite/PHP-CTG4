<?php
function search(Database $db, $input)
{
    // select data from database
    $db->query("SELECT  app_db.shows.id, app_db.shows.title, app_db.images.image, app_db.tickets.price, app_db.shows.description 
    
    FROM shows JOIN tickets JOIN images WHERE shows.id = tickets.show_id AND shows.image_id = images.id AND shows.title LIKE :names ", [":names" =>   "{$input}" . "%"]);
    // get data from database
    return $db->getAll();
}
