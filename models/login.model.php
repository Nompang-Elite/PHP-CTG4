<?php

class Users
{
    // Users
    private $user;
    private $db;
    public function __construct(Database $database)
    {
        $this->db = $database;
    }
    public function login(string $email, string $password): void
    {
        /* Method : Login method use to log the user in
        * @param type string $email
        * @param type string $password
        * @return void;
        */

        // Sanitize the input values: 
        $sanitizedValues = sanitizeValue([$email, $password]);
        // Query and validate the user info:
        $query = "SELECT Users.Email, Users.Password FROM  Users WHERE Users.Email = :email AND Users.Password = :pass";
        $preMatch = [":email" => $sanitizedValues[0], ":pass" => $sanitizedValues[1]];
        $statement = $this->db->query($query, $preMatch);
        $result = $statement->fetch();
        if ($result and $result !== null) {
            // Get user info from database:
            $statement = $this->db->query("SELECT First_name, Last_name, Email, Member FROM  Users INNER JOIN Permissions on Permissions.ID = Users.ID");
            // Set data to session:
            $_SESSION["user"] = $statement->fetch();
            $_SESSION["user"]["loggedIn"] = true;
            // Relocate logged user to home page:
            header("Location: /");
        }
    }
    public function logout()
    {
        session_destroy();
    }
}
