<?php
// Get value
$email = "";
$password = "";
function loginValidation(string $email, string $password): bool
{
    /*
    * Function description:
    * @param type string $email
    * @param type string $password
    * @param type 
    * @return type bool {true, false}
    */

    // Check if the input of email and pass are not empty or null:
    if ((!empty($email) and $email !== null) and (!empty($password)) and $password !== null) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } 
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $loginValid = loginValidation($email, $password);
}
echo loginValidation($email, $password);

