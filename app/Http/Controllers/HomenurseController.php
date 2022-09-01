<?php

namespace App\Http\Controllers;

use App\Models\Homenurse;
use App\Models\Journalparents;
use App\Models\Inventaireparents;
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
    public function updatematin(UpdateHomenurseRequest $request,  $id)
    {
        $data = Journalparents::find($id);
        $data->arrivalTime = $request->arrivalTime;
        $data->save();
        return redirect()->back();
    }
    public function updatesoir(UpdateHomenurseRequest $request,  $id)
    {
        $data = Journalparents::find($id);
        $data->departTime = $request->departTime;
        $data->save();
        return redirect()->back();
    }
    public function updatehumeur(UpdateHomenurseRequest $request,  $id)
    {
        $data = Journalparents::find($id);
        $data->humeur = $request->humeur;
        $data->save();
        return redirect()->back();
    }
    public function updateactivite(UpdateHomenurseRequest $request,  $id)
    {
        $data = Journalparents::find($id);
        $data->activity = $request->activity;
        $data->save();
        return redirect()->back();
    }
    public function updatesommeil(UpdateHomenurseRequest $request,  $id)
    {
        $data = Journalparents::find($id);
        $data->sleep = $request->sleep;
        $data->save();
        return redirect()->back();
    }
    public function updaterepas(UpdateHomenurseRequest $request,  $id)
    {
        $data = Journalparents::find($id);
        $data->eat = $request->eat;
        $data->save();
        return redirect()->back();
    }
    public function updateaccident(UpdateHomenurseRequest $request,  $id)
    {
        $data = Journalparents::find($id);
        $data->accident = $request->accident;
        $data->save();
        return redirect()->back();
    }
    public function updatechange(UpdateHomenurseRequest $request,  $id)
    {
        $product = Inventaireparents::where("profilenfantparent_id", "=", $id)->where("name", "=","couche")->get();
        $product[0]->quantity -= 1;
        $product[0]->save();
        return redirect()->back();
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
    //fonction pour le poo !!!!!!
    public function plus($id){
        $product = Journalparents::find($id);
        $product->poo += 1;
        $product->save();
        return redirect()->back();
    }
}
