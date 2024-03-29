<?php

namespace App\Http\Controllers;

use App\Events\LikeEvent;
use App\Http\Requests\ItemRequest;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

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
    public function store(ItemRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = Auth::user()->id;

        $item = Item::create($data);
        try {
            $item->addMediaFromRequest('image')->usingName($item->title)->toMediaCollection('items');
        } catch (FileDoesNotExist $e) {
        } catch (FileIsTooBig $e) {
        }

        return redirect()->action([AuthorController::class, 'show'], ['author' => Auth::user()]);
    }

    public function like(Item $item)//id
    {
        if ($like = $item->likes()->where('user_id', Auth::id())->first()) {
            $like->delete();
        } else {
            $item->likes()->create([
                'user_id' => Auth::id(),
            ]);
        }
        event(new LikeEvent($item, Auth::user(), 'card', $item->likes()->count())); //aca disparo el evento

        return response()->json([
            'count' => $item->likes()->count(),
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
    public function update(ItemRequest $request, Item $item)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        $item->update($data);
        try {
            $item->clearMediaCollection('items');
            $item->addMediaFromRequest('image')->usingName($item->title)->toMediaCollection('items');
        } catch (FileDoesNotExist $e) {
        } catch (FileIsTooBig $e) {
        }

        return redirect()->action([AuthorItemController::class,'show'], ['author' => Auth::user(), 'item' => $item]);
    }
}
