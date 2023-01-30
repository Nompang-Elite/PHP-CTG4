<?php
$header = "Home";
if (isset($_SESSION["user"]["logged"]) && $_SESSION["user"]["logged"] !== null) {
    $username = $_SESSION["user"]["username"];
}
require("views/pages/home/home.view.php");
