<?php
class AuthController
{
    public function login()
    {
        require __DIR__ . '/../../views/pages/auth/login.php';
    }
}

session_start();
session_destroy();
header('Location: /login');

exit;