<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegularDrugRequest;
use App\Http\Requests\UpdateRegularDrugRequest;
use App\Models\RegularDrug;

class RegularDrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return RegularDrug::all();
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
     * @param  \App\Http\Requests\StoreRegularDrugRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegularDrugRequest $request)
    {
        return RegularDrug::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegularDrug  $regularDrug
     * @return \Illuminate\Http\Response
     */
    public function show(RegularDrug $regularDrug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegularDrug  $regularDrug
     * @return \Illuminate\Http\Response
     */
    public function edit(RegularDrug $regularDrug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegularDrugRequest  $request
     * @param  \App\Models\RegularDrug  $regularDrug
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegularDrugRequest $request, RegularDrug $regularDrug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegularDrug  $regularDrug
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegularDrug $regularDrug)
    {
        //
    }
}
