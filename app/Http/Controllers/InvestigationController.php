<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvestigationRequest;
use App\Http\Requests\UpdateInvestigationRequest;
use App\Models\Investigation;

class InvestigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Investigation::all();
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
     * @param  \App\Http\Requests\StoreInvestigationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvestigationRequest $request)
    {
        //
        return Investigation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function show(Investigation $investigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigation $investigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvestigationRequest  $request
     * @param  \App\Models\Investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvestigationRequest $request, Investigation $investigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investigation  $investigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigation $investigation)
    {
        //
    }



    public function patientid($id)
    {
        
        return Investigation::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return Investigation::where('file_id', '=' ,$id)->get();
    }
}
