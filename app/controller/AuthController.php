<?php
/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/2minutes-site
 *
 * Authentication controller
 */
namespace App\Controller;

use App\Service\Db;

class AuthController
{
    public static function login($email, $password)
    {
        $user = Db::table('users')
            ->select('*')
            ->where('email', '=', $email)
            ->get();
    
        if (!empty($user) && password_verify($password, $user[0]->password)) {
            session_start();
            $_SESSION['user_id'] = $user[0]->id;
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