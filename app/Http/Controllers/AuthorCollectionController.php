<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorCollectionController extends Controller
{
    public function index(User $author)
    {
        return view('collections.index', [
            'collections' => $author->collections()->with('author')->withCount('likes')->get(),
        ]);
    }

}
