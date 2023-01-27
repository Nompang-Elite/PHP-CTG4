<?php
require_once("models/validation.model.php");
class Users
{
    // Users object:
    private $user;
    private $db;
    public function __construct(Database $database)
    {
        $this->db = $database;
    }
    public function login(string $email, string $password): bool
    {
        /* Method : Login method use to log the user in
        * @param type string $email
        * @param type string $password
        * @return bool;
        */

        // Sanitize the input values: 
        $sanitizedValues = sanitizeValue([$email, $password]);
        // Query and validate the user info:
        $query = "SELECT Users.email, Passwords.passwd_hash FROM Users INNER JOIN Passwords WHERE (Users.email = :email AND Passwords.passwd_hash = :pass) ";
        $preMatch = [":email" => $sanitizedValues[0], ":pass" => $sanitizedValues[1]];
        $statement = $this->db->query($query, $preMatch);
        $result = $statement->fetch();
        if ($result and $result !== null) {
            // Get user info from database:
            $statement = $this->db->query("SELECT Users.* , Permissions.type FROM  Users INNER JOIN Permissions on Permissions.ID = Users.ID");
            // Set data to session:
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
}
function checkUserLogin(Database $db): array
{
    if (isset($_SESSION["user"]["logged"]) and $_SESSION["user"]["logged"] === true) {
        $userActivate = $_SESSION["user"]["logged"];
        $user = new Users($db);
        return ["control" => $user, "active" => $userActivate];
    } else
        return [];
}
