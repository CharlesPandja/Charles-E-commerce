<?php

require_once "Connection.php";

class Order extends Connection
{
    public function createOrder($userId, $cartItems)
    {
        $db = Connection::getConnect();
        foreach ($cartItems as $item) {
            $sql = $db->prepare("INSERT INTO orders (user_id, product_id, quantity, total) VALUES (?, ?, ?, ?)");
            $sql->execute([$userId, $item['id'], $item['quantity'], $item['price'] * $item['quantity']]);
        }
    }

    public function getUserOrders($userId)
    {
        $db = Connection::getConnect();
        $sql = $db->prepare("SELECT * FROM orders WHERE user_id = ?");
        $sql->execute([$userId]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
