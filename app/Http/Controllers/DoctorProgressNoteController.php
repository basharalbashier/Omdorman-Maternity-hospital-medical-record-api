<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorProgressNoteRequest;
use App\Http\Requests\UpdateDoctorProgressNoteRequest;
use App\Models\DoctorProgressNote;

class DoctorProgressNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return DoctorProgressNote::all();
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
     * @param  \App\Http\Requests\StoreDoctorProgressNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorProgressNoteRequest $request)
    {
        //
        return DoctorProgressNote::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorProgressNote  $doctorProgressNote
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorProgressNote $doctorProgressNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorProgressNote  $doctorProgressNote
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorProgressNote $doctorProgressNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorProgressNoteRequest  $request
     * @param  \App\Models\DoctorProgressNote  $doctorProgressNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorProgressNoteRequest $request, DoctorProgressNote $doctorProgressNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorProgressNote  $doctorProgressNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorProgressNote $doctorProgressNote)
    {
        //
    }


    public function patientid($id)
    {
        
        return DoctorProgressNote::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return DoctorProgressNote::where('file_id', '=' ,$id)->get();
    }
}
