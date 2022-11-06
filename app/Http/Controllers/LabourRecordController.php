<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabourRecordRequest;
use App\Http\Requests\UpdateLabourRecordRequest;
use App\Models\LabourRecord;

class LabourRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return LabourRecord::all();
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
     * @param  \App\Http\Requests\StoreLabourRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLabourRecordRequest $request)
    {
        //
        return LabourRecord::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LabourRecord  $labourRecord
     * @return \Illuminate\Http\Response
     */
    public function show(LabourRecord $labourRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LabourRecord  $labourRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(LabourRecord $labourRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLabourRecordRequest  $request
     * @param  \App\Models\LabourRecord  $labourRecord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLabourRecordRequest $request, LabourRecord $labourRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LabourRecord  $labourRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabourRecord $labourRecord)
    {
        //
    }
}
