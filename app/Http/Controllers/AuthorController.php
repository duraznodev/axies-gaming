<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::with('items.media', 'media')
            ->withSum('items', 'price')
            ->get();
        return view('authors.index', compact('authors'));
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
            'author' => $author,
        ]);
    }
}
