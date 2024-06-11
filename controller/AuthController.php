<?php

require_once __DIR__ . "/../model/User.php";

class AuthController
{
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = new User();
            $authenticatedUser = $user->authenticate($email, $password);

            if ($authenticatedUser) {
                session_start();
                $_SESSION['user'] = $authenticatedUser;
                header('Location: index.php');
                exit;
            } else {
                echo "Email ou mot de passe invalide !";
            }
        }
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];

            $user = new User();
            if ($user->register($email, $password, $name, $firstname)) {
                header('Location: login.php');
                exit;
            } else {
                echo "Oups, il se peut qu'il y ait une erreur dans votre saisie !";
            }
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: login.php');
        exit;
    }
}
