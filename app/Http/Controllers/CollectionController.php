<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('collections.index', [
            'collections' => auth()->user()->collections()->with('author')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collections.create', ['author' => auth()->user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);
        $data['user_id'] = auth()->user()->id;

        $collection = auth()->user()->collections()->create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        //
    }
}
