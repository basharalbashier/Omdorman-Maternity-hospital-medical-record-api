<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalResponseRequest;
use App\Http\Requests\UpdateNeonatalResponseRequest;
use App\Models\NeonatalResponse;
use Illuminate\Http\Request;

class NeonatalResponseController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalResponseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        return NeonatalResponse::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalResponse  $neonatalResponse
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalResponse $neonatalResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalResponse  $neonatalResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalResponse $neonatalResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalResponseRequest  $request
     * @param  \App\Models\NeonatalResponse  $neonatalResponse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalResponseRequest $request, NeonatalResponse $neonatalResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalResponse  $neonatalResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalResponse $neonatalResponse)
    {
        //
    }

    public function findbyrequest($id){

       
        return NeonatalResponse::where(' request_id', '=' ,$id)->get();

    }
}
