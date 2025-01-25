<?php
/**
 * @package     php-light
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * Authentication controller
 */
namespace App\Controller;

use App\Service\Db;

class AuthController
{
    public static function login($email, $password)
    {

        // TODO : to rewrite
        $db = Db::getInstance(); // removed from Db class
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            return true;
        }
        return false;
    }

    public static function logout()
    {
        session_start();
        session_destroy();
        header("Location: /login");
        exit();
    }

    public static function isAuthenticated()
    {
        session_start();
        return isset($_SESSION['user_id']);
    }
}