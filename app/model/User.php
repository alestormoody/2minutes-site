<?php
/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/2minutes-site
 *
 * User model to extend DB - like orm
 */
namespace App\Models;

use App\Service\Db;

class User extends Db {
    protected static $table = 'users';

    // Metodo per ottenere solo utenti attivi
    public static function active() {
        return self::table(self::$table)
                   ->where('status', '=', 'active');
    }

    // Metodo per la ricerca per email
    public static function findByEmail($email) {
        return self::table(self::$table)
                   ->where('email', '=', $email)
                   ->get();
    }

    // Metodo per utenti con ruolo specifico
    public static function withRole($role) {
        return self::table(self::$table)
                   ->where('role', '=', $role);
    }
}
