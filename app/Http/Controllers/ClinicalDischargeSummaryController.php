<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClinicalDischargeSummaryRequest;
use App\Http\Requests\UpdateClinicalDischargeSummaryRequest;
use App\Models\ClinicalDischargeSummary;

class ClinicalDischargeSummaryController extends Controller
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
     * @param  \App\Http\Requests\StoreClinicalDischargeSummaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClinicalDischargeSummaryRequest $request)
    {
        //

        return  ClinicalDischargeSummary::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClinicalDischargeSummary  $clinicalDischargeSummary
     * @return \Illuminate\Http\Response
     */
    public function show(ClinicalDischargeSummary $clinicalDischargeSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClinicalDischargeSummary  $clinicalDischargeSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(ClinicalDischargeSummary $clinicalDischargeSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClinicalDischargeSummaryRequest  $request
     * @param  \App\Models\ClinicalDischargeSummary  $clinicalDischargeSummary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClinicalDischargeSummaryRequest $request, ClinicalDischargeSummary $clinicalDischargeSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClinicalDischargeSummary  $clinicalDischargeSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClinicalDischargeSummary $clinicalDischargeSummary)
    {
        //
    }


    public function patientid($id)
    {
        
        return ClinicalDischargeSummary::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return ClinicalDischargeSummary::where('file_id', '=' ,$id)->get();
    }
}
