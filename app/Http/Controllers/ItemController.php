<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Http\Requests\ItemCreateRequest;
use App\Models\Item;
use App\Models\Like;
use Illuminate\Http\Request;
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
    public function store(ItemCreateRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->user()->id;

        $item = Item::create($data);
        try {
            $item->addMediaFromRequest('image')->usingName($item->title)->toMediaCollection('items');
        } catch (FileDoesNotExist $e) {
        } catch (FileIsTooBig $e) {
        }

        return redirect()->route('items.show', compact('item'));
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
        event(new MyEvent($item, Auth::user(),'card',$item->likes()->count()));//aca disparo el evento
        return response()->json([
            "count"=> $item->likes()->count(),
        ]);//Retorna response vacio con 204
//        event(new \App\Events\MyEvent($item, Auth::user()));
//        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        if ($item->user_id == Auth::user()->id) {
            return view('items.show', [
                'item' => $item,
            ]);
        } else {
            return redirect()->action([AuthorItemController::class, 'show'], ['author' => $item->author, 'item' => $item]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public
    function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(Item $item)
    {
        //
    }
}
