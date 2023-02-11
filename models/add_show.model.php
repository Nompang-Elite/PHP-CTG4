<?php
function createShow(Database $db, string $title, string $description, mixed $image): int
{
    // Add image and return the ID:
    $imageId = addImage($db, $image);
    // Insert show query:
    $q = "INSERT INTO shows(title, description, image_id)
        VALUES (:title, :description, :imageId)";
    // Execute the insert show query:
    $db->query($q, [
        ':title' => $title,
        ':description' => $description,
        ':imageId' => $imageId
    ]);
    // Get the last added show ID:
    $db->query('SELECT id FROM shows ORDER BY id DESC LIMIT 1');
    // Resturn the last added show ID:
    return ($db->get())['id'];
}
function addImage(Database $db, $image): int
{
    // Insert image into database:
    $db->query("INSERT INTO images (image) VALUES (:image);", [':image' => $image]);
    // Get Image ID:
    $db->query("SELECT id FROM images ORDER BY id DESC LIMIT 1");
    // Return image ID:
    return ($db->get())['id'];
}

function createVenue(Database $db, string $name, string $address): int
{
    $db->query('INSERT INTO venues (name, address) VALUES(:name, :address)', [
        ':name' => $name,
        ':address' => $address
    ]);
    $db->query("SELECT id FROM venues ORDER BY id DESC LIMIT 1");
    // Return ID:
    return ($db->get())['id'];
}
function createTicket(Database $db, $info): void
{
    /*
    
    Datastructure for the input:

    $info = [
    'title' => '',
    'description' => '',
    'image' => null,
    'venueName' => '',
    'address' => '',
    'price' => '',
    ];
    
    */

    // Create show on shows table in database:
    $shows = createShow($db, $info['title'], $info['description'], $info['image']);
    // Create venue on venues table in database:
    $venue = createVenue($db, $info['venueName'], $info['address']);
    // Create ticket for the show:
    $db->query('INSERT INTO tickets (show_id, venue_id, price, code) VALUES(:showId, :venueId, :price, :code)', [
        ':showId' => $shows,
        ':venueId' => $venue,
        ':price' => $info['price'],
        ':code' => uniqid() // Generate UID
    ]);
}
