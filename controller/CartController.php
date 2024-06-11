<?php

require_once __DIR__ . "/../model/Cart.php";

class CartController
{
    public function addToCart()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $userId = $_SESSION['user']['id'];
            $productId = $_POST['product_id'];
            $quantity = $_POST['quantity'];

            $cart = new Cart();
            $cart->addToCart($userId, $productId, $quantity);

            header('Location: cart.php');
            exit;
        }
    }

    public function viewCart()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $userId = $_SESSION['user']['id'];

        $cart = new Cart();
        return $cart->getCartItems($userId);
    }
}
