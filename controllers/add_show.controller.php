<?php
// Import config file:
$config = require("./utils/config.php");
// Import and declare database:
$db = new Database($config["database"]["online"]);
// Check for the image that are being added
if (isset($_POST) && !empty($_POST)) {
    if (isset($_FILES) && !empty($_FILES)) {
        // Get tmp location of img:
        $img = $_FILES['image']['tmp_name'];
        // Date List:
        $dates = $_POST['datetime'];
        // Clean Input Values:
        $info = sanitizeVlues([
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'imageTmpLocation' => $img,
            'venueName' => $_POST['venueName'],
            'address' => $_POST['address'],
            'price' => $_POST['price'],
        ]);
        // Execute the ticket creation:
        $ticket = createTicket($db, $info);
        foreach ($dates as $index => $value) {
            createSchedule($db, $ticket, $value);
        }
    }
}
