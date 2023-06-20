<?php

namespace App\Http\Controllers;

use App\Models\User;

class AuthorCollectionController extends Controller
{
    public function index(User $author)
    {
        return view('collections.index', [
            'collections' => $author->collections()->with('author','items')->withCount('likes')->get(),
        ]);
    }
}
