<?php

namespace App\Policies;

use App\Models\Password;
use App\Models\User;

class PasswordPolicy
{
    public function delete(User $user, Password $password)
    {
        return $user->id === $password->user_id;
    }
}
