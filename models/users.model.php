<?php
require_once("models/validation.model.php");
class Users
{
    // Users object:
    private $db;
    public function __construct(Database $database)
    {
        // Init function
        $this->db = $database; // Assign $db with the object of $database
    }
    public function login(string $email, string $password): bool
    {
        /* 
            Method : Login method use to log the user in
            @param type string $email
            @param type string $password
            @return bool;
        */

        // Sanitize the input values: 
        $sanitizedValues = sanitizeValue([$email, $password]);
        // Query and validate the user info:
        $query =
            "SELECT Users.ID, Users.email, Passwords.passwd_hash
        FROM Users INNER JOIN Passwords
        WHERE (Users.email = :email AND Passwords.passwd_hash = :pass)
        ";
        //Set the parameter for the Query.
        $preMatch = [":email" => $sanitizedValues[0], ":pass" => $sanitizedValues[1]];
        // Run and execute the query.
        $statement = $this->db->query($query, $preMatch);
        // Fetch database from the executed statment.
        $result = $statement->fetch();
        if (!empty($result) and $result !== null) {
            // Get user info from database:
            // dump_die($result["ID"]); // Use this to debug
            $statement = $this->db->query("SELECT Users.*, Permissions.type FROM Users JOIN Permissions ON Permissions.ID = Users.permission_id AND Users.ID = :id", [":id" => $result["ID"]]);
            // Set data to session:
            // dump_die($statement->fetch()); // Use this to debug
            $_SESSION["user"] = $statement->fetch();
            $_SESSION["user"]["logged"] = true;
            return true;
        } else return false;
    }
    public function logout()
    {
        // Unset and destroy sessoin:
        unset($_SESSION["user"]);
        session_destroy();
    }
    public function register(array $array)
    {
        // Query for the insertion:
        $query =
            "INSERT INTO Passwords VALUES(:email, :pass);
        INSERT INTO Users(first_name, last_name,username, email, birth_date, gender )
        VALUES(:firstName, :lastName, :username, :email, :birthDate, :gender);
        ";
        // Run and execute the query:
        $this->db->query($query, [
            ":firstName" => $array["firstName"],
            ":lastName" => $array["lastName"],
            ":username" => $array["username"],
            ":email" => $array["email"],
            ":pass" => $array["password"],
            ":birthDate" => $array["birthDate"],
            ":gender" => $array["gender"],
        ]);
    }
}
function checkUserLogin(Database $db): array
{
    /*
        Function description:
        Use to check for the logged user.

        @param type Database $db
        @return type array
    */

    // Check is the session is set:
    if (isset($_SESSION["user"]["logged"]) and $_SESSION["user"]["logged"] === true) {
        $userActivate = $_SESSION["user"]["logged"];
        // New user object
        $user = new Users($db);
        // Return the array of info
        return ["control" => $user, "active" => $userActivate];
    } else
        //Return empty array if false
        return [];
}
