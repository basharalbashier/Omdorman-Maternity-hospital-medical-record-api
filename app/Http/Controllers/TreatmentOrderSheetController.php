<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTreatmentOrderSheetRequest;
use App\Http\Requests\UpdateTreatmentOrderSheetRequest;
use App\Models\TreatmentOrderSheet;

class TreatmentOrderSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TreatmentOrderSheet::all();
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
     * @param  \App\Http\Requests\StoreTreatmentOrderSheetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTreatmentOrderSheetRequest $request)
    {
        return TreatmentOrderSheet::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TreatmentOrderSheet  $treatmentOrderSheet
     * @return \Illuminate\Http\Response
     */
    public function show(TreatmentOrderSheet $treatmentOrderSheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TreatmentOrderSheet  $treatmentOrderSheet
     * @return \Illuminate\Http\Response
     */
    public function edit(TreatmentOrderSheet $treatmentOrderSheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTreatmentOrderSheetRequest  $request
     * @param  \App\Models\TreatmentOrderSheet  $treatmentOrderSheet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTreatmentOrderSheetRequest $request, TreatmentOrderSheet $treatmentOrderSheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TreatmentOrderSheet  $treatmentOrderSheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(TreatmentOrderSheet $treatmentOrderSheet)
    {
        //
    }

    public function patientid($id)
    {
        
        return TreatmentOrderSheet::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return TreatmentOrderSheet::where('file_id', '=' ,$id)->get();
    }
}
