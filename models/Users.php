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
        $sanitizeValues = sanitizeValue([$email, $pass]);
        $q = "SELECT Users.email, Passwords.passwd_hash FROM Users JOIN Passwords ON Users.Email = :email AND Passwords.passwd_hash = :pass";
        $state = $this->db->query($q, [
            "email" => $email,
            "pass" => $pass
        ]);
        $info = $state->fetch();
        // if ($info[])
        dum_die($info);
    }
    public function register()
    {
    }
    public function logout()
    {
    }
}
