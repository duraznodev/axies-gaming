<?php

namespace App\Http\Controllers;

use App\Events\LikeEvent;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollectionController extends Controller
{
    public function index()
    {
        return view('collections.index', [
            'collections' => Auth::user()->collections()->with('author')->withCount('likes')->get(),
        ]);
    }

    public function create()
    {
        return view('collections.create', ['author' => auth()->user()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);
        $data['user_id'] = auth()->user()->id;
        Auth::user()->collections()->create($data);

        return redirect()->action([AuthorCollectionController::class,'index'], ['author' => Auth::user()]);
    }

    public function like(Collection $collection)
    {
        if ($like = $collection->likes()->where('user_id', Auth::id())->first()) {
            $like->delete();
        } else {
            $collection->likes()->create([
                'user_id' => Auth::id(),
            ]);
        }
        event(new LikeEvent($collection, Auth::user(), 'collection', $collection->likes()->count()));

        return response()->json([
            'count' => $collection->likes()->count(),
        ]);
    }
}
