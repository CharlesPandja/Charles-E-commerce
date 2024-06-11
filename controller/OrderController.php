<?php

require_once __DIR__ . "/../model/Order.php";
require_once __DIR__ . "/../model/Cart.php";

class OrderController
{
    public function placeOrder()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $userId = $_SESSION['user']['id'];

        $cart = new Cart();
        $cartItems = $cart->getCartItems($userId);

        $order = new Order();
        $order->createOrder($userId, $cartItems);

        $cart->clearCart($userId);

        header('Location: orders.php');
        exit;
    }

    public function listUserOrders()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $userId = $_SESSION['user']['id'];

        $order = new Order();
        return $order->getUserOrders($userId);
    }
}
