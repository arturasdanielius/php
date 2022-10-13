<?php

namespace App\Http\Controllers;

use App\Models\restoran;
use App\Http\Requests\StorerestoranRequest;
use App\Http\Requests\UpdaterestoranRequest;

class RestoranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorerestoranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerestoranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function show(restoran $restoran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function edit(restoran $restoran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterestoranRequest  $request
     * @param  \App\Models\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterestoranRequest $request, restoran $restoran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function destroy(restoran $restoran)
    {
        //
    }
}
