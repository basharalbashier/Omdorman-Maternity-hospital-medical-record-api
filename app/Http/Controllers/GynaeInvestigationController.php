<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeInvestigationRequest;
use App\Http\Requests\UpdateGynaeInvestigationRequest;
use App\Models\GynaeInvestigation;
use Illuminate\Http\Request;

class GynaeInvestigationController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaeInvestigationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaeInvestigation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeInvestigation  $gynaeInvestigation
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeInvestigation $gynaeInvestigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeInvestigation  $gynaeInvestigation
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeInvestigation $gynaeInvestigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeInvestigationRequest  $request
     * @param  \App\Models\GynaeInvestigation  $gynaeInvestigation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeInvestigationRequest $request, GynaeInvestigation $gynaeInvestigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeInvestigation  $gynaeInvestigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeInvestigation $gynaeInvestigation)
    {
        //
    }


    public function patientid($id)
    {
        
        return GynaeInvestigation::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeInvestigation::where('file_id', '=' ,$id)->get();
    }
}
