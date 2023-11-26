<?php

namespace App\Http\Controllers;

use App\Models\inboxs;
use App\Http\Requests\StoreinboxsRequest;
use App\Http\Requests\UpdateinboxsRequest;

class InboxsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inboxe.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinboxsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(inboxs $inboxs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inboxs $inboxs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinboxsRequest $request, inboxs $inboxs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inboxs $inboxs)
    {
        //
    }
}
