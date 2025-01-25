<?php

namespace App\Middleware;

use App\Controller\AuthController;

class AuthMiddleware
{
    public static function handle()
    {
        if (!AuthController::isAuthenticated()) {
            header("Location: /login");
            exit();
        }
    }
}