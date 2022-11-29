<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNurseProgressNoteRequest;
use App\Http\Requests\UpdateNurseProgressNoteRequest;
use App\Models\NurseProgressNote;

class NurseProgressNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return NurseProgressNote::all();
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
     * @param  \App\Http\Requests\StoreNurseProgressNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNurseProgressNoteRequest $request)
    {

        return NurseProgressNote::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NurseProgressNote  $nurseProgressNote
     * @return \Illuminate\Http\Response
     */
    public function show(NurseProgressNote $nurseProgressNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NurseProgressNote  $nurseProgressNote
     * @return \Illuminate\Http\Response
     */
    public function edit(NurseProgressNote $nurseProgressNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNurseProgressNoteRequest  $request
     * @param  \App\Models\NurseProgressNote  $nurseProgressNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNurseProgressNoteRequest $request, NurseProgressNote $nurseProgressNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NurseProgressNote  $nurseProgressNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(NurseProgressNote $nurseProgressNote)
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
