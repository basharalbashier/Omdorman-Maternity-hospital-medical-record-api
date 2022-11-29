<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeAnaesthesiaRecordRequest;
use App\Http\Requests\UpdateGynaeAnaesthesiaRecordRequest;
use App\Models\GynaeAnaesthesiaRecord;
use Illuminate\Http\Request;

class GynaeAnaesthesiaRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return GynaeAnaesthesiaRecord::all();
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
     * @param  \App\Http\Requests\StoreGynaeAnaesthesiaRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaeAnaesthesiaRecord::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeAnaesthesiaRecord  $gynaeAnaesthesiaRecord
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeAnaesthesiaRecord $gynaeAnaesthesiaRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeAnaesthesiaRecord  $gynaeAnaesthesiaRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeAnaesthesiaRecord $gynaeAnaesthesiaRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeAnaesthesiaRecordRequest  $request
     * @param  \App\Models\GynaeAnaesthesiaRecord  $gynaeAnaesthesiaRecord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeAnaesthesiaRecordRequest $request, GynaeAnaesthesiaRecord $gynaeAnaesthesiaRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeAnaesthesiaRecord  $gynaeAnaesthesiaRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeAnaesthesiaRecord $gynaeAnaesthesiaRecord)
    {
        //
    }
}
