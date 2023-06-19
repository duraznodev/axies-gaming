<?php

namespace App\Policies;

use App\Models\Item;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ItemPolicy
{
    public function update(User $user, Item $item): bool
    {
        return $user->id == $item->user_id;
    }
}
