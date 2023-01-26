<?php

function validateUserLogin($db, string $email, string $pass): bool
{
    $sanitizedEmail = htmlspecialchars($email);
    $sanitizedPass = htmlspecialchars($pass);
    $query = "SELECT Email, Users.Password FROM Users WHERE Email = :email AND Users.Password = :pass";
    $statement = $db->query($query, [":email" => $sanitizedEmail, ":pass" => $sanitizedPass]);
    $users = $statement->fetch();
    if ($users) {
        $statement = $db->query("SELECT * FROM Users;");
        $_SESSION = $statement->fetch();
        $_SESSION["LoggedIn"] = true;
        return true;
    } else
        return false;
}

class Users
{
    // Users
    public function __construct()
    {
        
    }
    public function login(){
        // Login method use to log the user in
    }
    public function logout(){
        
    }
}
