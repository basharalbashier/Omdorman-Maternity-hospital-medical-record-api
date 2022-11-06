<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabourWardInstRequest;
use App\Http\Requests\UpdateLabourWardInstRequest;
use App\Models\LabourWardInst;

class LabourWardInstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return LabourWardInst::all();
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
     * @param  \App\Http\Requests\StoreLabourWardInstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLabourWardInstRequest $request)
    {
        //
        return LabourWardInst::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LabourWardInst  $labourWardInst
     * @return \Illuminate\Http\Response
     */
    public function show(LabourWardInst $labourWardInst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LabourWardInst  $labourWardInst
     * @return \Illuminate\Http\Response
     */
    public function edit(LabourWardInst $labourWardInst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLabourWardInstRequest  $request
     * @param  \App\Models\LabourWardInst  $labourWardInst
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLabourWardInstRequest $request, LabourWardInst $labourWardInst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LabourWardInst  $labourWardInst
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabourWardInst $labourWardInst)
    {
        //
    }
}
