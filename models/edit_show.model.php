<?php
function updateShow(Database $db, string $id, string $title, string $description, string $imageTmpLocation)
{
    // Update Show query:
    $db->query("UPDATE shows
                SET title = :title,
                    description = :description
                WHERE shows.id = :id
   ", [
        ":title" => $title,
        ":description" => $description,
        ":id" => $id
    ]);
    // Get image Id of show
    $db->query("SELECT image_id FROM shows WHERE shows.id = :id", [":id" => $id]);
    // Update Image
    // updateImage(
    //     $db,
    //     $db->get(),
    //     $imageTmpLocation
    // );
}


function updateImage(Database $db, string $id,  string $imageTmpLocation)
{
    // Get Image tmp location of uploaded img:
    // REQUIRED: $_FILE['image']['tmp_name']
    $imageBlob = file_get_contents($imageTmpLocation);
    // Update image into database:
    $db->query("UPDATE images SET image = :image WHERE images.id = :id;", [':image' => $imageBlob, ':id' => $id]);
}

function updateVenue(Database $db, string  $id, string $name, string $address)
{
    // Update Show query:
    $db->query("UPDATE venues
                SET name = :name,
                    address = :address
                WHERE venues.id = :id
   ", [
        ":name" => $name,
        ":address" => $address,
        ":id" => $id
    ]);
}

function updateTicket(Database $db, string  $id, $info)
{

    // Get ticket info for show and venue:
    $db->query("SELECT * FROM tickets WHERE tickets.id = :id", [":id" => $id]);
    $ticketInfo = $db->get();
    // update show on shows table in database:
    updateShow($db, $ticketInfo['show_id'], $info['title'], $info['description'], $info['imageTmpLocation']);
    // update venue on venues table in database:
    updateVenue($db, $ticketInfo['venue_id'],  $info['venueName'], $info['address']);
    // update ticket for the show:
    $db->query('UPDATE tickets
                SET price = :price
                WHERE tickets.id = :id
    ', [
        ':price' => $info['price'],
        ':id' => $id,
    ]);
}

function updateSchedule(Database $db, int $id, string $datetime)
{
    // Execute and Update data in schedules table:
    $db->query("UPDATE schedules
                SET datetime = :datetime
                WHERE id = :id
    ", [
        ':id' => $id,
        ':datetime' => $datetime,
    ]);
}
