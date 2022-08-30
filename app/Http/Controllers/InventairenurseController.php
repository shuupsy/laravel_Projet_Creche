<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventairenurse;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreInventairenurseRequest;
use App\Http\Requests\UpdateInventairenurseRequest;

class InventairenurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaire = Inventairenurse::all();
        return view('backend.pages.inventaireNurses', compact('inventaire'));
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
     * @param  \App\Http\Requests\StoreInventairenurseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInventairenurseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventairenurse  $inventairenurse
     * @return \Illuminate\Http\Response
     */
    public function show(Inventairenurse $inventairenurse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventairenurse  $inventairenurse
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventairenurse $inventairenurse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventairenurseRequest  $request
     * @param  \App\Models\Inventairenurse  $inventairenurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventaire = Inventairenurse::find($id);
        $inventaire -> quantity = $request -> quantity;
        $inventaire -> save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventairenurse  $inventairenurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventairenurse $inventairenurse)
    {
        //
    }

    public function plus($id){
        $product = Inventairenurse::find($id);
        $product->quantity += 1;
        // dd($product->quantity);
        $product->save();
        return redirect()->back();

    }


    public function moins($id){
        $product = Inventairenurse::find($id);
        if($product->quantity > 0) {
            $product->quantity -= 1;
        }else{
            $product->quantity == 0;
        }
        $product->save();
        return redirect()->back();

    }
}
