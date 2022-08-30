<?php

namespace App\Http\Controllers;

use App\Models\Homenurse;
use App\Models\Profilenfantparents;
use App\Http\Requests\StoreHomenurseRequest;
use App\Http\Requests\UpdateHomenurseRequest;

class HomenurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kids = Profilenfantparents::all();
        return view('backend.pages.home', compact('kids'));
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
     * @param  \App\Http\Requests\StoreHomenurseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomenurseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homenurse  $homenurse
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_kid = Profilenfantparents::find($id);
        return view('backend.pages.profilEnfant', compact('id_kid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homenurse  $homenurse
     * @return \Illuminate\Http\Response
     */
    public function edit(Homenurse $homenurse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomenurseRequest  $request
     * @param  \App\Models\Homenurse  $homenurse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomenurseRequest $request, Homenurse $homenurse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homenurse  $homenurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homenurse $homenurse)
    {
        //
    }
}
