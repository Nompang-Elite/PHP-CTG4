<?php
// get data from input
$input = $_POST['value'];
// select data from database
$db->query("SELECT * FROM shows JOIN tickets WHERE shows.id = tickets.show_id AND shows.name LIKE :names ", [":names" =>   "{$input}" . "%"]);
// get data from database
$shows = $db->getAll();