<?php

namespace App\Policies;

use App\Models\Author;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class AuthorPolicy
{

    public function update(User $user, User $author): bool
    {
        return $user->id == $author->id;
    }
}
