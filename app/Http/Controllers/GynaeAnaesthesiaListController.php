<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeAnaesthesiaListRequest;
use App\Http\Requests\UpdateGynaeAnaesthesiaListRequest;
use App\Models\GynaeAnaesthesiaList;

class GynaeAnaesthesiaListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return GynaeAnaesthesiaList::all();
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
     * @param  \App\Http\Requests\StoreGynaeAnaesthesiaListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGynaeAnaesthesiaListRequest $request)
    {
        //
        return GynaeAnaesthesiaList::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeAnaesthesiaList  $gynaeAnaesthesiaList
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeAnaesthesiaList $gynaeAnaesthesiaList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeAnaesthesiaList  $gynaeAnaesthesiaList
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeAnaesthesiaList $gynaeAnaesthesiaList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeAnaesthesiaListRequest  $request
     * @param  \App\Models\GynaeAnaesthesiaList  $gynaeAnaesthesiaList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeAnaesthesiaListRequest $request, GynaeAnaesthesiaList $gynaeAnaesthesiaList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeAnaesthesiaList  $gynaeAnaesthesiaList
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeAnaesthesiaList $gynaeAnaesthesiaList)
    {
        //
    }

    public function patientid($id)
    {
        
        return GynaeAnaesthesiaList::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeAnaesthesiaList::where('file_id', '=' ,$id)->get();
    }
}
