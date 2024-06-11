<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . "/../controller/CartController.php";

$cartController = new CartController();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cartController->addToCart();
} else {
    include __DIR__ . "/../view/cart.php";
}
