<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIVFluidRequest;
use App\Http\Requests\UpdateIVFluidRequest;
use App\Models\IVFluid;

class IVFluidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //f
        return IVFluid::all();
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
     * @param  \App\Http\Requests\StoreIVFluidRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIVFluidRequest $request)
    {
        return IVFluid::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IVFluid  $iVFluid
     * @return \Illuminate\Http\Response
     */
    public function show(IVFluid $iVFluid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IVFluid  $iVFluid
     * @return \Illuminate\Http\Response
     */
    public function edit(IVFluid $iVFluid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIVFluidRequest  $request
     * @param  \App\Models\IVFluid  $iVFluid
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIVFluidRequest $request, IVFluid $iVFluid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IVFluid  $iVFluid
     * @return \Illuminate\Http\Response
     */
    public function destroy(IVFluid $iVFluid)
    {
        //
    }
}
