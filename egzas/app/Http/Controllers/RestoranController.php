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
        return view('restoran.index', [
            'restorans' => Restoran::orderBy('updated_at', 'desc')->paginate(5),
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restoran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorerestoranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerestoranRequest $request)
    {
        Restoran::create([
            'title' => $request->title,
            'town' => $request->town,
            'address' => $request->address,
            'workTime' => $request->workTime,
        ]);
        return redirect()->route('r_index')->with('ok', 'All Good!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function show(restoran $restoran)
    {
        return view('restoran.show', [
            'restoran' => $restoran,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\restoran  $restoran
     * @return \Illuminate\Http\Response
     */
    public function edit(restoran $restoran)
    {
        return view('restoran.edit', [
            'restoran' => $restoran,
        ]);
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
        $restoran->update([
            'title' => $request->title,
            'town' => $request->town,
            'address' => $request->address,
            'workTime' => $request->workTime,
        ]);
        // $restoran
        // ->removeImages($request->delete_photo)
        // ->addImages($request->file('photo'));

        return redirect()->route('r_index')->with('ok', 'All Good!');
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
