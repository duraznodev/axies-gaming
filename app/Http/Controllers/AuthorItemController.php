<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;

class AuthorItemController extends Controller
{
    public function show(User $author, Item $item)
    {
        return view('authors_items.show', compact('item'));
    }
}
