<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHaematologyResultRequest;
use App\Http\Requests\UpdateHaematologyResultRequest;
use App\Models\HaematologyResult;

class HaematologyResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return HaematologyResult::all();
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
     * @param  \App\Http\Requests\StoreHaematologyResultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHaematologyResultRequest $request)
    {
        //
        return HaematologyResult::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HaematologyResult  $haematologyResult
     * @return \Illuminate\Http\Response
     */
    public function show(HaematologyResult $haematologyResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HaematologyResult  $haematologyResult
     * @return \Illuminate\Http\Response
     */
    public function edit(HaematologyResult $haematologyResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHaematologyResultRequest  $request
     * @param  \App\Models\HaematologyResult  $haematologyResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHaematologyResultRequest $request, HaematologyResult $haematologyResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HaematologyResult  $haematologyResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaematologyResult $haematologyResult)
    {
        //
    }

    public function patientid($id)
    {
        
        return HaematologyResult::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return HaematologyResult::where('file_id', '=' ,$id)->get();
    }
}
