<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . "/../controller/OrderController.php";

$orderController = new OrderController();
$orderController->placeOrder();
