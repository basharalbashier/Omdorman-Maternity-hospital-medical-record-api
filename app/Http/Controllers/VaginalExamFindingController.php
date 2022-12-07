<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVaginalExamFindingRequest;
use App\Http\Requests\UpdateVaginalExamFindingRequest;
use App\Models\VaginalExamFinding;

class VaginalExamFindingController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVaginalExamFindingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVaginalExamFindingRequest $request)
    {
        return VaginalExamFinding::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VaginalExamFinding  $vaginalExamFinding
     * @return \Illuminate\Http\Response
     */
    public function show(VaginalExamFinding $vaginalExamFinding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VaginalExamFinding  $vaginalExamFinding
     * @return \Illuminate\Http\Response
     */
    public function edit(VaginalExamFinding $vaginalExamFinding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVaginalExamFindingRequest  $request
     * @param  \App\Models\VaginalExamFinding  $vaginalExamFinding
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVaginalExamFindingRequest $request, VaginalExamFinding $vaginalExamFinding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VaginalExamFinding  $vaginalExamFinding
     * @return \Illuminate\Http\Response
     */
    public function destroy(VaginalExamFinding $vaginalExamFinding)
    {
        //
    }




    public function patientid($id)
    {
        
        return VaginalExamFinding::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return VaginalExamFinding::where('file_id', '=' ,$id)->get();
    }
}
