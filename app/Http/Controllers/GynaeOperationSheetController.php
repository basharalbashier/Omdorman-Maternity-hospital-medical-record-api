<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeOperationSheetRequest;
use App\Http\Requests\UpdateGynaeOperationSheetRequest;
use App\Models\GynaeOperationSheet;

class GynaeOperationSheetController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaeOperationSheetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGynaeOperationSheetRequest $request)
    {
        //
        return GynaeOperationSheet::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeOperationSheet  $gynaeOperationSheet
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeOperationSheet $gynaeOperationSheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeOperationSheet  $gynaeOperationSheet
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeOperationSheet $gynaeOperationSheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeOperationSheetRequest  $request
     * @param  \App\Models\GynaeOperationSheet  $gynaeOperationSheet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeOperationSheetRequest $request, GynaeOperationSheet $gynaeOperationSheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeOperationSheet  $gynaeOperationSheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeOperationSheet $gynaeOperationSheet)
    {
        //
    }


    public function patientid($id)
    {
        
        return GynaeOperationSheet::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeOperationSheet::where('file_id', '=' ,$id)->get();
    }
}
