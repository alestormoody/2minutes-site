<?php

namespace App\Policies;

class UserPolicy
{
    public static function canEdit($user, $resource)
    {
        return $user['id'] === $resource['user_id'];
    }
}