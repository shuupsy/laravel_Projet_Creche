<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfilenfantparentsRequest;
use App\Http\Requests\UpdateProfilenfantparentsRequest;
use App\Models\Profilenfantparents;

class ProfilenfantparentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profilenfantparents::all();
        return view('frontend.pages.profilEnfant', compact('profil'));
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
     * @param  \App\Http\Requests\StoreProfilenfantparentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfilenfantparentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profilenfantparents  $profilenfantparents
     * @return \Illuminate\Http\Response
     */
    public function show(Profilenfantparents $profilenfantparents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profilenfantparents  $profilenfantparents
     * @return \Illuminate\Http\Response
     */
    public function edit(Profilenfantparents $profilenfantparents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilenfantparentsRequest  $request
     * @param  \App\Models\Profilenfantparents  $profilenfantparents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfilenfantparentsRequest $request, Profilenfantparents $profilenfantparents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profilenfantparents  $profilenfantparents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profilenfantparents $profilenfantparents)
    {
        //
    }
}
