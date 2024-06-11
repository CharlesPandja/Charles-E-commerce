<?php

class Connection
{
    public static function getConnect()
    {
        try {
            $db = new PDO("mysql: host=localhost; dbname=e-commerce", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }
        return $db;
    }
}
