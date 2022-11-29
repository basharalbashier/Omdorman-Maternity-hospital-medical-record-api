<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalRequestRequest;
use App\Http\Requests\UpdateNeonatalRequestRequest;
use App\Models\NeonatalRequest;
use Illuminate\Http\Request;

class NeonatalRequestController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return NeonatalRequest::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalRequest  $neonatalRequest
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalRequest $neonatalRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalRequest  $neonatalRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalRequest $neonatalRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalRequestRequest  $request
     * @param  \App\Models\NeonatalRequest  $neonatalRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalRequestRequest $request, NeonatalRequest $neonatalRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalRequest  $neonatalRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalRequest $neonatalRequest)
    {
        //
    }

    public function patientid($id)
    {
        
        return NeonatalRequest::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalRequest::where('file_id', '=' ,$id)->get();
    }

    public function status($id)
    {
        
        return NeonatalRequest::where('status', '=' ,$id)->get();
    }
}
