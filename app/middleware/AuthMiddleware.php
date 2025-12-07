<?php

namespace App\Middleware;

use App\Controllers\AuthController;

class AuthMiddleware
{
    public static function checkAuth()
    {
        if (!AuthController::checkAuth()) {
            header('Location: /login');
            exit;
        }
    }

    public static function redirectIfAuthenticated()
    {
        if (AuthController::checkAuth()) {
            header('Location: /dashboard');
            exit;
        }
    }
}