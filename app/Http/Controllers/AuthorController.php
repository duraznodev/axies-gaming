<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors.index', [
            'authors' => User::all(),
        ]);
    }

    public function follow(User $author)
    {
        try {
            auth()->user()->following()->attach($author);
        } catch (\Exception $e) {
            auth()->user()->following()->detach($author);
        }
        return back();
    }

    public function show(User $author, Request $request)
    {
        $author->load(['media', 'items' => function ($query) use ($request) {
            if (isset($request->category)) {
                $query = $query->where('category_id', $request->category);
            }
            $query->withCount('likes');
        }]);

        return view('authors.show', [
            'author' => $author
        ]);
    }

}
