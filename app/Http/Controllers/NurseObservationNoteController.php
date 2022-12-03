<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNurseObservationNoteRequest;
use App\Http\Requests\UpdateNurseObservationNoteRequest;
use App\Models\NurseObservationNote;
use App\Models\NurseProgressNote;

class NurseObservationNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return NurseObservationNote::all();
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
     * @param  \App\Http\Requests\StoreNurseObservationNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNurseObservationNoteRequest $request)
    {
        //
        return NurseObservationNote::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NurseObservationNote  $nurseObservationNote
     * @return \Illuminate\Http\Response
     */
    public function show(NurseObservationNote $nurseObservationNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NurseObservationNote  $nurseObservationNote
     * @return \Illuminate\Http\Response
     */
    public function edit(NurseObservationNote $nurseObservationNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNurseObservationNoteRequest  $request
     * @param  \App\Models\NurseObservationNote  $nurseObservationNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNurseObservationNoteRequest $request, NurseObservationNote $nurseObservationNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NurseObservationNote  $nurseObservationNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(NurseObservationNote $nurseObservationNote)
    {
        //
    }

    public function patientid($id)
    {
        
        return NurseProgressNote::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NurseProgressNote::where('file_id', '=' ,$id)->get();
    }
}
