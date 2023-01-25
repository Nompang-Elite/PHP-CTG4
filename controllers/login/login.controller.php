<?php
// Login page controller:
$configure = require("utils/config.php");
if ($_SERVER["REQUEST_METHOD"] === "POST" and (isset($_POST["email"]) and isset($_POST["password"]))) {
    if (!empty($_POST["email"]) and !empty($_POST["password"])) {
        echo $_POST["email"] . " " . $_POST["password"];
    } else
        routeToPage("/", $configure["route"]);
} else
    require("views/html/login/login.view.php");
