<?php
// dump_die($_SESSION);
if (isset($_SESSION['activeUser'])) {
    $username = $_SESSION['activeUser']['username'];
    $firstName = $_SESSION['activeUser']['first_name'];
    $lastName = $_SESSION['activeUser']['last_name'];
    $email = $_SESSION['activeUser']['email'];
    $birthDate = $_SESSION['activeUser']['birth_date'];
    $accountType = $_SESSION['activeUser']['account_type'];
    $pfImage = $_SESSION['activeUser']['image'];
}


require('./views/pages/account.views.php');
