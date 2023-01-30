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
         * @method int logout() logout(void)
         * @method int register() register(array $array)
         */

        $database = $this->db;
        // Sanitize the input:
        $sanitized = sanitizeValue([$email, $pass]);
        // Query for the user check:
        $q = "SELECT Users.ID FROM Users
        JOIN Passwords ON (Users.email = :email AND (Passwords.email = Users.email AND Passwords.passwd_hash = :pass))";
        $state = $database->query($q, [
            ":email" => $sanitized[0],
            ":pass" => $sanitized[1]
        ]);
        // Fetch data from the database and store in variable:
        $result = $state->fetch();
        // Check if user data is not empty:
        if (!empty($result) && isset($result) && $result !== null) {
            // If user found, fetch all the user data:
            $q = "SELECT Users.* , Permissions.type FROM Users JOIN Permissions WHERE  Users.ID = :id AND Permissions.ID = Users.permission_id";
            $state = $database->query($q, [":id" => $result["ID"]]);
            // Set user data into session:
            $_SESSION["user"] = $state->fetch();
            // Declare that user is logged in:
            $_SESSION["user"]["logged"] = true;
            // Head to home after logged in:
            header("Location: /");
        }
    }
    public function register($array): void
    {
        /**
         * Register user data to database
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
            ":first_name" => $array["firstName"],
            ":last_name" => $array["lastName"],
            ":username" => $array["username"],
            ":email" => $array["email"],
            ":dirth_date" => $array["birthDate"],
            ":gender" => $array["gender"],
            ":password" => $array["password"],
        ]);
        // Check if the values if empty:
        if (
            isset($sanitizedList[":first_name"]) &&
            isset($sanitizedList[":last_name"]) &&
            isset($sanitizedList[":username"]) &&
            isset($sanitizedList[":email"]) &&
            isset($sanitizedList[":dirth_date"]) &&
            isset($sanitizedList[":gender"]) &&
            isset($sanitizedList[":password"])
        ) {
            $database = $this->db;
            $q = "SELECT * FROM Passwords WHERE Passwords.email = :email";
            $emailCheck = $database->query($q, [":email" => $sanitizedList[":email"]]);
            if ($emailCheck === $sanitizedList[":email"]) {
                echo "Duplication!!!";
            } else {
                // Query to insert user info to database:
                $q =
                    "INSERT INTO Passwords
                    VALUES (:email, :password);
                    INSERT INTO Users(first_name, last_name, username, email, birth_date, gender)
                    VALUES (:first_name, :last_name, :username, :email, :dirth_date, :gender);";
                // Execute the query:
                try {
                    $state = $this->db->query($q, $sanitizedList);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                $this->login($sanitizedList[":email"], $sanitizedList[":password"]);
            }
        }
    }
    public function logout()
    {
        unset($_SESSION["user"]);
        session_destroy();
    }
}
