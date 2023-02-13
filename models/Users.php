<?php

class Users
{
    private $db;
    private $passPattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
    private $namePattern = "/^([a-zA-Z0-9,:\S-]{1,20})$/";
    public function __construct(Database $database)
    {
        // Assign database to $db
        $this->db = $database;
    }
    public function login(string $email, string $password)
    {
        /** Login to the account
         * @param string $email
         * @param string $password
         * @return null
         */

        // Sanitize Input values
        $cleaned = sanitizeVlues(["email" => $email, "password" => $password]);
        // Query statments to check for the user:
        $q = "SELECT users.id, passwords.password FROM passwords JOIN users
        WHERE passwords.email = :email AND users.email = :email";
        // Execute the query:
        $this->db->query($q, [
            ":email" => $cleaned["email"]
        ]);
        // Get response data from query:
        $response = $this->db->get();
        // Check for the retrieved user data:
        if (!empty($response) && isset($response) && $response !== null) {
            // Check if the password matched with the retrieved password:
            if (isset($response["password"]) && password_verify($cleaned["password"], $response["password"])) {
                // Query to get all the user info from database:
                $q = "SELECT users.* , images.image FROM users JOIN images WHERE (users.id = :id AND users.email = :email) OR images.id = users.profile_pic";
                // Execute query:
                $this->db->query($q, [
                    ":id" => $response["id"],
                    ":email" => $cleaned["email"],
                ]);
                // Assign user data to session:
                $_SESSION["activeUser"] = $this->db->get();
                // Set session logged variable to true:
                $_SESSION["logged"] = true;
                header("Location: /");
            } else {
                // Return false if not valid:
                return null;
            }
        } else {
            $_GET["login"] = "no account";
        }
    }

    public function logout(): void
    {
        /**
         * Logout from the current account
         * @return void
         */
        // Unsset the session value:
        unset($_SESSION["activeUser"]);
        // Set logged to false:
        $_SESSION["logged"] = false;
        // Destroy the session:
        session_destroy();
        header("Location: /home");
    }

    public function register(array $infoList)
    {
        /**
         * Register a new account
         * @return void
         */
        $cleaned = sanitizeVlues($infoList);
        // Check all the required condition:
        if (
            (isset($cleaned["firstName"]) &&
                isset($cleaned["lastName"]) &&
                isset($cleaned["username"]) &&
                isset($cleaned["email"]) &&
                isset($cleaned["password"]) &&
                isset($cleaned["birthDate"]) &&
                isset($cleaned["gender"])
            )
            &&
            (validatePattern($cleaned["firstName"], $this->namePattern) &&
                validatePattern($cleaned["lastName"], $this->namePattern) &&
                validatePattern($cleaned["username"], $this->namePattern) &&
                validatePattern($cleaned["password"], $this->passPattern) &&
                filter_var($cleaned["email"], FILTER_VALIDATE_EMAIL)
            )
        ) {
            // Query for the usr check:
            $q = "SELECT passwords.email FROM passwords WHERE passwords.email = :email";
            // Execute the query:
            $this->db->query($q, [":email" => $cleaned["email"]]);
            // Get the respone data:
            $response = $this->db->get();
            if (empty($response) && ($cleaned["password"] === $cleaned["confirmpassword"])) {
                // User register query, insert data to db:
                $q = "INSERT INTO passwords VALUES (:email, :password);
                        INSERT INTO users (first_name, last_name, username, email, birth_date, gender, account_type) VALUES (:firstName, :lastName, :username, :email, :birthDate, :gender, :accType)";
                // Execute the query:
                $this->db->query($q, [
                    ":firstName" => $cleaned["firstName"],
                    ":lastName" => $cleaned["lastName"],
                    ":username" => $cleaned["username"],
                    ":email" => $cleaned["email"],
                    ":password" => password_hash($cleaned["password"], PASSWORD_DEFAULT),
                    ":birthDate" => $cleaned["birthDate"],
                    ":gender" => $cleaned["gender"],
                    ":accType" => $cleaned["account_type"],
                ]);
                $this->login($cleaned["email"], $cleaned["password"]);
            } else
                echo "Existed";
        } else
            echo "Fails";
    }

    public function updateInfo()
    {
        /**
         * Summary of updateInfo
         * @return void
         */
    }
}
