<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemCreateRequest;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('items.index', [
            'items' => auth()->user()->items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create', ['author' => auth()->user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemCreateRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->user()->id;

        $item = Item::create($data);
        $item->addMediaFromRequest('image')->usingName($item->title)->toMediaCollection($item->author->name);

        return redirect()->route('items.show', compact('item'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items.show', [
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
