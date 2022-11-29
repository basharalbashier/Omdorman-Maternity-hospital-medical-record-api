<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreuSRequestRequest;
use App\Http\Requests\UpdateuSRequestRequest;
use App\Models\uSRequest;
use Illuminate\Http\Request;
use App\Policies\USRequestPolicy;

class USRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return uSRequest::all();
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
     * @param  \App\Http\Requests\StoreuSRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return uSRequest::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\uSRequest  $uSRequest
     * @return \Illuminate\Http\Response
     */
    public function show(Request $uSRequest)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\uSRequest  $uSRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(uSRequest $uSRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuSRequestRequest  $request
     * @param  \App\Models\uSRequest  $uSRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        
        $us = uSRequest::find($id);
        $us->update($request->all());
        return $us;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\uSRequest  $uSRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(uSRequest $uSRequest)
    {
        //
    }

    public function patientid($id)
    {
        
        return uSRequest::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return uSRequest::where('file_id', '=' ,$id)->get();
    }

    public function status($id)
    {
        
        return uSRequest::where('status', '=' ,$id)->get();
    }

}
