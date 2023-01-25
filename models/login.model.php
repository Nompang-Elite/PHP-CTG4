<?php
function checkLoginValues(string $email, string $password): bool
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
        } else
            return false;
    } else
        return false;
}

function validateLoginInfo(Database $db, string $email, string $password): void
{
    /*
    * Function description:
    * 
    * @param type Database $db
    * @param type string $email
    * @param type string $password
    * @return void
    *
    */
    // Check and validate user info inside the database:
    if (checkLoginValues($email, $password)) {
        // Sanitize the input:
        $sanitizedEmail = htmlspecialchars($email);
        $sanitizedpasswd = htmlspecialchars($password);
        // Query info for the matched user:
        $statement = $db->query("SELECT Users.ID, Email, Users.Password FROM Users WHERE Users.Email = :email", [":email" => $sanitizedEmail]);
        $getEmail = $statement->fetch();
        // Goto user home page If the password and info matched:
        if ($getEmail["Password"] === $sanitizedpasswd) {
            require("views\Home\home.view.php");
        }
    }
}
