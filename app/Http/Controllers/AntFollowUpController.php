<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAntFollowUpRequest;
use App\Http\Requests\UpdateAntFollowUpRequest;
use App\Models\AntFollowUp;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;

class AntFollowUpController extends Controller
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
     * @param  \App\Http\Requests\StoreAntFollowUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {
        //
        return  AntFollowUp::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AntFollowUp  $antFollowUp
     * @return \Illuminate\Http\Response
     */
    public function show(AntFollowUp $antFollowUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AntFollowUp  $antFollowUp
     * @return \Illuminate\Http\Response
     */
    public function edit(AntFollowUp $antFollowUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAntFollowUpRequest  $request
     * @param  \App\Models\AntFollowUp  $antFollowUp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAntFollowUpRequest $request, AntFollowUp $antFollowUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AntFollowUp  $antFollowUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntFollowUp $antFollowUp)
    {
        //
    }

    public function patientid($id)
    {
        
        return AntFollowUp::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return AntFollowUp::where('file_id', '=' ,$id)->get();
    }
}
