<?php

class User
{
    private $db;
    public function __construct(Database $database)
    {
        $this->db = $database;
    }
    public function login(string $email, string $pass)
    {
        $sanitized = sanitizeValue([$email, $pass]);
        $q = "SELECT Users.ID FROM Users JOIN Passwords ON (Users.email = :email AND (Passwords.email = Users.email AND Passwords.passwd_hash = :pass))";
        $state = $this->db->query($q, [
            ":email" => $sanitized[0],
            ":pass" => $sanitized[1]
        ]);
        $result = $state->fetch();
        if (!empty($result) && !isset($result) && $result !== null) {
            // dum_die($result);
            $_SESSION["user"] = $result;
            $_SESSION["user"]["logged"] = true;
            header("Location: /");
        }
        return $state->fetch();
    }
    public function register()
    {
    }
    public function logout()
    {
    }
}
