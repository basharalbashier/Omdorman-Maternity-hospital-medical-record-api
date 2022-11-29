<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDischargeDrugsRequest;
use App\Http\Requests\UpdateDischargeDrugsRequest;
use App\Models\DischargeDrugs;

class DischargeDrugsController extends Controller
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
     * @param  \App\Http\Requests\StoreDischargeDrugsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDischargeDrugsRequest $request)
    {
        //
        return  DischargeDrugs::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DischargeDrugs  $dischargeDrugs
     * @return \Illuminate\Http\Response
     */
    public function show(DischargeDrugs $dischargeDrugs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DischargeDrugs  $dischargeDrugs
     * @return \Illuminate\Http\Response
     */
    public function edit(DischargeDrugs $dischargeDrugs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDischargeDrugsRequest  $request
     * @param  \App\Models\DischargeDrugs  $dischargeDrugs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDischargeDrugsRequest $request, DischargeDrugs $dischargeDrugs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DischargeDrugs  $dischargeDrugs
     * @return \Illuminate\Http\Response
     */
    public function destroy(DischargeDrugs $dischargeDrugs)
    {
        //
    }

    public function patientid($id)
    {
        
        return DischargeDrugs::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return DischargeDrugs::where('file_id', '=' ,$id)->get();
    }
}
