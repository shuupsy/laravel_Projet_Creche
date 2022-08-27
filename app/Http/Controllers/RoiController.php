<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoiRequest;
use App\Http\Requests\UpdateRoiRequest;
use App\Models\Roi;

class RoiController extends Controller
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
     * @param  \App\Http\Requests\StoreRoiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roi  $roi
     * @return \Illuminate\Http\Response
     */
    public function show(Roi $roi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roi  $roi
     * @return \Illuminate\Http\Response
     */
    public function edit(Roi $roi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoiRequest  $request
     * @param  \App\Models\Roi  $roi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoiRequest $request, Roi $roi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roi  $roi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roi $roi)
    {
        //
    }
}
