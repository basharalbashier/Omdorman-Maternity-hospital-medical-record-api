<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalNurseNoteRequest;
use App\Http\Requests\UpdateNeonatalNurseNoteRequest;
use App\Models\NeonatalNurseNote;
use Illuminate\Http\Request;

class NeonatalNurseNoteController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalNurseNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return NeonatalNurseNote::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalNurseNote  $neonatalNurseNote
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalNurseNote $neonatalNurseNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalNurseNote  $neonatalNurseNote
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalNurseNote $neonatalNurseNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalNurseNoteRequest  $request
     * @param  \App\Models\NeonatalNurseNote  $neonatalNurseNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalNurseNoteRequest $request, NeonatalNurseNote $neonatalNurseNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalNurseNote  $neonatalNurseNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalNurseNote $neonatalNurseNote)
    {
        //
    }


    public function patientid($id)
    {
        
        return NeonatalNurseNote::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalNurseNote::where('file_id', '=' ,$id)->get();
    }
}
