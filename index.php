<?php
// Function
require("utils/function.php");
// Require router
require("router.php");
// Main php file
dump_die($_SERVER["REQUEST_URI"]);
// Route to home page
?>
<h1>Hello</h1>