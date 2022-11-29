<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIcuRequestRequest;
use App\Http\Requests\UpdateIcuRequestRequest;
use App\Models\IcuRequest;
use Illuminate\Http\Request;

class IcuRequestController extends Controller
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
     * @param  \App\Http\Requests\StoreIcuRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return IcuRequest::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IcuRequest  $icuRequest
     * @return \Illuminate\Http\Response
     */
    public function show(IcuRequest $icuRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IcuRequest  $icuRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(IcuRequest $icuRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIcuRequestRequest  $request
     * @param  \App\Models\IcuRequest  $icuRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIcuRequestRequest $request, IcuRequest $icuRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IcuRequest  $icuRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(IcuRequest $icuRequest)
    {
        //
    }

    
    public function patientid($id)
    {
        
        return IcuRequest::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return IcuRequest::where('file_id', '=' ,$id)->get();
    }

    public function status($id)
    {
        
        return IcuRequest::where('status', '=' ,$id)->get();
    }

}
