<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . "/../controller/ProductController.php";
include __DIR__ . "/../view/product_list.php";
