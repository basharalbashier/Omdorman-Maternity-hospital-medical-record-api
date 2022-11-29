<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalFeedingAndMedicationRequest;
use App\Http\Requests\UpdateNeonatalFeedingAndMedicationRequest;
use App\Models\NeonatalFeedingAndMedication;
use Illuminate\Http\Request;

class NeonatalFeedingAndMedicationController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalFeedingAndMedicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        return NeonatalFeedingAndMedication::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalFeedingAndMedication  $neonatalFeedingAndMedication
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalFeedingAndMedication $neonatalFeedingAndMedication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalFeedingAndMedication  $neonatalFeedingAndMedication
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalFeedingAndMedication $neonatalFeedingAndMedication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalFeedingAndMedicationRequest  $request
     * @param  \App\Models\NeonatalFeedingAndMedication  $neonatalFeedingAndMedication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalFeedingAndMedicationRequest $request, NeonatalFeedingAndMedication $neonatalFeedingAndMedication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalFeedingAndMedication  $neonatalFeedingAndMedication
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalFeedingAndMedication $neonatalFeedingAndMedication)
    {
        //
    }

    public function patientid($id)
    {
        
        return NeonatalFeedingAndMedication::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalFeedingAndMedication::where('file_id', '=' ,$id)->get();
    }
}
