<?php

require_once "Connection.php";

class Product extends Connection
{
    public function getAllProducts()
    {
        $db = Connection::getConnect();
        $sql = $db->query("SELECT * FROM products");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
