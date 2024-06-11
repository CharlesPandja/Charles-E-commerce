<?php
require_once __DIR__ . "/../controller/AuthController.php";

$authController = new AuthController();
$authController->register();
include __DIR__ . "/../view/register.php";
