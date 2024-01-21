<?php
namespace Controllers;

use Models\User;

class Login
{
    public function __construct()
    {
        $this->userModel = new User();
    }

    public function login($username, $password)
    {
        $user = $this->userModel->findUserByUsername($username);

        if (!$user) {
            throw new \Exception('User not found');
        }

        if (!password_verify($password, $user['password'])) {
            throw new \Exception('Invalid password');
        }

        $_SESSION['user'] = $user;
    }

    public function logout()
    {
        unset($_SESSION['user']);
    }
}