<?php

class User
{
    private $db;
    public function __construct(Database $database)
    {
        // Assign Database to Users $db instance:
        $this->db = $database;
    }
    public function login(string $email, string $pass): void
    {
        /**
         * @param string $pass Login Password.
         * @param string $email Login Email Address.
         * @method int login() login(string $email, string $pass)
         * @method int logout() login()
         * @method int register() login()
         */

        // Sanitize the input:
        $sanitized = sanitizeValue([$email, $pass]);
        // Query for the user check:
        $q = "SELECT Users.ID FROM Users JOIN Passwords ON (Users.email = :email AND (Passwords.email = Users.email AND Passwords.passwd_hash = :pass))";
        $state = $this->db->query($q, [
            ":email" => $sanitized[0],
            ":pass" => $sanitized[1]
        ]);
        // Fetch data from the database and store in variable:
        $result = $state->fetch();
        // Check if user data is not empty:
        if (!empty($result) && isset($result) && $result !== null) {
            // If user found, fetch all the user data:
            $q = "SELECT * , Permissions.type FROM Users JOIN Permissions ON Users.ID = Permissions.ID AND Users.ID = :id";
            $state = $this->db->query($q, [":id" => $result["ID"]]);
            // Set user data into session:
            $_SESSION["user"] = $state->fetch();
            // Declare that user is logged in:
            $_SESSION["user"]["logged"] = true;
            // Head to home after logged in:
            header("Location: /");
        }
        // return $state->fetch();
    }
    public function register($array): void
    {
        /**
         * @param array $array Array for user info:
         *  [
         *   "firstName" => $values,
         *   "lastName" => $values,
         *   "username" => $values,
         *   "email" => $values,
         *   "password" => $values,
         *  ]
         * @return void
         */
        // Sanitize the input values:
        $sanitizedList = sanitizeValue([
            "firstName" => $array[""],
            "lastName" => $array[""],
            "username" => $array[""],
            "email" => $array[""],
            "password" => $array[""],
        ]);

        $q = "";
    }
    public function logout()
    {
        unset($_SESSION["user"]);
        session_destroy();
    }
}
