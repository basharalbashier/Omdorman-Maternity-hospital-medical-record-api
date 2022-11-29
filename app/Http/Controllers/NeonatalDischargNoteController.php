<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalDischargNoteRequest;
use App\Http\Requests\UpdateNeonatalDischargNoteRequest;
use App\Models\NeonatalAdmission;
use App\Models\NeonatalDischargNote;
use Illuminate\Http\Request;

class NeonatalDischargNoteController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalDischargNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return NeonatalDischargNote::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalDischargNote  $neonatalDischargNote
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalDischargNote $neonatalDischargNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalDischargNote  $neonatalDischargNote
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalDischargNote $neonatalDischargNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalDischargNoteRequest  $request
     * @param  \App\Models\NeonatalDischargNote  $neonatalDischargNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalDischargNoteRequest $request, NeonatalDischargNote $neonatalDischargNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalDischargNote  $neonatalDischargNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalDischargNote $neonatalDischargNote)
    {
        //
    }

    public function patientid($id)
    {
        
        return NeonatalDischargNote::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalAdmission::where('file_id', '=' ,$id)->get();
    }
}
