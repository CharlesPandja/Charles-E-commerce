<?php

require_once "Connection.php";

class Cart extends Connection
{
    public function addToCart($userId, $productId, $quantity)
    {
        $db = Connection::getConnect();
        $sql = $db->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, ?)");
        return $sql->execute([$userId, $productId, $quantity]);
    }

    public function getCartItems($userId)
    {
        $db = Connection::getConnect();
        $sql = $db->prepare("SELECT p.id, p.name, p.price, c.quantity FROM cart c JOIN products p ON c.product_id = p.id WHERE c.user_id = ?");
        $sql->execute([$userId]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function clearCart($userId)
    {
        $db = Connection::getConnect();
        $sql = $db->prepare("DELETE FROM cart WHERE user_id = ?");
        return $sql->execute([$userId]);
    }
}
