<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalInvestigationRequest;
use App\Http\Requests\UpdateNeonatalInvestigationRequest;
use App\Models\NeonatalInvestigation;
use Illuminate\Http\Request;

class NeonatalInvestigationController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalInvestigationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return NeonatalInvestigation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalInvestigation  $neonatalInvestigation
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalInvestigation $neonatalInvestigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalInvestigation  $neonatalInvestigation
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalInvestigation $neonatalInvestigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalInvestigationRequest  $request
     * @param  \App\Models\NeonatalInvestigation  $neonatalInvestigation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalInvestigationRequest $request, NeonatalInvestigation $neonatalInvestigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalInvestigation  $neonatalInvestigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalInvestigation $neonatalInvestigation)
    {
        //
    }

    public function patientid($id)
    {
        
        return NeonatalInvestigation::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalInvestigation::where('file_id', '=' ,$id)->get();
    }
}
