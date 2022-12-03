<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalProgressNoteRequest;
use App\Http\Requests\UpdateNeonatalProgressNoteRequest;
use App\Models\NeonatalProgressNote;
use Illuminate\Http\Request;

class NeonatalProgressNoteController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalProgressNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return NeonatalProgressNote::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalProgressNote  $neonatalProgressNote
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalProgressNote $neonatalProgressNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalProgressNote  $neonatalProgressNote
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalProgressNote $neonatalProgressNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalProgressNoteRequest  $request
     * @param  \App\Models\NeonatalProgressNote  $neonatalProgressNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalProgressNoteRequest $request, NeonatalProgressNote $neonatalProgressNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalProgressNote  $neonatalProgressNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalProgressNote $neonatalProgressNote)
    {
        //
    }

    public function patientid($id)
    {
        
        return NeonatalProgressNote::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalProgressNote::where('file_id', '=' ,$id)->get();
    }
}
