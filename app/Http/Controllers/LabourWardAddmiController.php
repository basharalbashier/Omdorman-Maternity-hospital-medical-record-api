<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabourWardAddmiRequest;
use App\Http\Requests\UpdateLabourWardAddmiRequest;
use App\Models\LabourWardAddmi;

class LabourWardAddmiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return LabourWardAddmi::all();
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
     * @param  \App\Http\Requests\StoreLabourWardAddmiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLabourWardAddmiRequest $request)
    {
        //
        $request->validate([
     
            'unit'=>'required',
            // 'gravida'=>'required',
            // 'par'=>'required',
            // 'lmp'=>'required',
            // 'edd'=>'required',
            // 'ga'=>'required',
            // 'co'=>'required',
            // 'relevent_past_history'=>'required',
            // 'fundel_height'=>'required',
            // 'lie'=>'required',
            // 'presentation'=>'required',
            // 'fhr'=>'required',
            // 'fm'=>'required',
            // 'vaginal_exam'=>'required',
            // 'diagnosis'=>'required',
            // 'immediat_instrunction'=>'required',
            // 'dr_id'=>'required',
            // 'patient_id'=>'required',
            // 'unit'=>'required',
            // 'complaint'=>'required',
            // 'history_presenting_illness'=>'required',
            // 'pulse'=>'required',
            // 'bp'=>'required',
            // 'temp'=>'required',
            // 'general_condition'=>'required',
            // 'cvs_chest_examination'=>'required',
            // 'fundel_height'=>'required',
            // 'lie'=>'required',
            // 'presentation'=>'required',
            // 'fhr'=>'required',
            // 'fm'=>'required',
            // 'vaginal_exam'=>'required',
            // 'diagnosis'=>'required',
            // 'immediat_instrunction'=>'required',
            'dr_id'=>'required',
            'patient_id'=>'required',




        ]);
        return LabourWardAddmi::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LabourWardAddmi  $labourWardAddmi
     * @return \Illuminate\Http\Response
     */
    public function show(LabourWardAddmi $labourWardAddmi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LabourWardAddmi  $labourWardAddmi
     * @return \Illuminate\Http\Response
     */
    public function edit(LabourWardAddmi $labourWardAddmi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLabourWardAddmiRequest  $request
     * @param  \App\Models\LabourWardAddmi  $labourWardAddmi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLabourWardAddmiRequest $request, LabourWardAddmi $labourWardAddmi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LabourWardAddmi  $labourWardAddmi
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabourWardAddmi $labourWardAddmi)
    {
        //
    }
}
