<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Asset;
use App\Http\Resources\Asset as AssetResource;

class AssetController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create new Asset 
        $asset = new Asset;
        $asset->asset_id = request->input('asset_id');
        $asset->type = request->input('type');
        $asset->description = request->input('description');
        $asset->movement = request->input('movement');
        $asset->picture_path = request->input('picture_path');
        $asset->purchase_date = request->input('purchase_date');
        $asset->start_use_date = request->input('start_use_date');
        $asset->purchase_price = request->input('purchase_price');
        $asset->warranty_expiry_date = request->input('warranty_expiry_date');
        $asset->degredation_year = request->input('degredation_year');
        $asset->current_value_naira = request->input('current_value_naira');
        $asset->location = request->input('location');
        
        $asset->save();
        return new AssetResource($asset);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
