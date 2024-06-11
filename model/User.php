<?php

require_once "Connection.php";

class User extends Connection
{
    public function register($email, $password, $name, $firstname)
    {
        $db = Connection::getConnect();
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = $db->prepare("INSERT INTO users (email, password, name, firstname) VALUES (?, ?, ?, ?)");
        return $sql->execute([$email, $passwordHash, $name, $firstname]);
    }

    public function authenticate($email, $password)
    {
        $db = Connection::getConnect();
        $sql = $db->prepare("SELECT * FROM users WHERE email = ?");
        $sql->execute([$email]);
        $user = $sql->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
