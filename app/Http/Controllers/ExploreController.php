<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(Request $request)
    {

        $collectionsIds = $request->collections ?? [];
        $categoriesIds = $request->categories ?? [];
        $collections = Collection::all();
        $categories = Category::all();
        $itemsEager = Item::with('author.media', 'media')->withCount('likes');

        if (empty($collectionsIds) && empty($categoriesIds)) {
            $items = $itemsEager->get();
        } else {
            $items = $itemsEager->whereIn('collection_id', $collectionsIds)->orWhereIn('category_id', $categoriesIds)->get();
        }

        return view('explore', ['items' => $items, 'categories' => $categories, 'collections' => $collections,
        ]);
    }
}
