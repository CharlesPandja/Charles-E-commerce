<?php
require_once __DIR__ . "/../controller/AuthController.php";

$authController = new AuthController();
$authController->login();
include __DIR__ . "/../view/login.php";
