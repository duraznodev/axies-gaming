<?php

namespace App\Policies;

use App\Models\User;

class AuthorPolicy
{
    public function update(User $user, User $author): bool
    {
        return $user->id == $author->id;
    }
}
