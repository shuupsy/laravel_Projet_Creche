<?php

namespace App\Http\Controllers;

use App\Models\Profilenfantparents;
use App\Models\Administrationparents;
use App\Http\Requests\StoreAdministrationparentsRequest;
use App\Http\Requests\UpdateAdministrationparentsRequest;

class AdministrationparentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profilenfantparents::find(1);
        return view("frontend.pages.administration",compact("data"));
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
     * @param  \App\Http\Requests\StoreAdministrationparentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdministrationparentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrationparents  $administrationparents
     * @return \Illuminate\Http\Response
     */
    public function show(Administrationparents $administrationparents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrationparents  $administrationparents
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrationparents $administrationparents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdministrationparentsRequest  $request
     * @param  \App\Models\Administrationparents  $administrationparents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdministrationparentsRequest $request, Administrationparents $administrationparents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrationparents  $administrationparents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrationparents $administrationparents)
    {
        //
    }
}
