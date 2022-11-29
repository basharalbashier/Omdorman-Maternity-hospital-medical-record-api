<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIcuResponseRequest;
use App\Http\Requests\UpdateIcuResponseRequest;
use App\Models\IcuResponse;
use Illuminate\Http\Request;

class IcuResponseController extends Controller
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
     * @param  \App\Http\Requests\StoreIcuResponseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return IcuResponse::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IcuResponse  $icuResponse
     * @return \Illuminate\Http\Response
     */
    public function show(IcuResponse $icuResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IcuResponse  $icuResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(IcuResponse $icuResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIcuResponseRequest  $request
     * @param  \App\Models\IcuResponse  $icuResponse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIcuResponseRequest $request, IcuResponse $icuResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IcuResponse  $icuResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(IcuResponse $icuResponse)
    {
        //
    }

    public function requestId($id)
    {
        
        return IcuResponse::where('patient_id', '=' ,$id)->get();
    }

    public function findbyrequest($id){

       
        return IcuResponse::where(' request_id', '=' ,$id)->get();

    }
}
