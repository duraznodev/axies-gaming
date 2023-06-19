<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;

class AuthorItemController extends Controller
{
    public function show(User $author, Item $item)
    {
        $item = $item->load(['author.media', 'author.items.media', 'media', 'author.items' => function ($query) use ($item) {
            $query->withCount('likes')->where('id','!=',$item->id);
        }])->loadCount('likes');
        return view('authors_items.show', compact('item'));
    }
}
