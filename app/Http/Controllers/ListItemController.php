<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use App\Http\Requests\StoreListItemRequest;
use App\Http\Requests\UpdateListItemRequest;

class ListItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('listitems.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreListItemRequest $request)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'title' => 'required'
        ]);
        ListItem::create($request->all());

        return redirect()->route('listItems.index')->with('success', 'Todo item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ListItem $listItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListItem $listItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListItemRequest $request, ListItem $listItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListItem $listItem)
    {
        //
    }
}
