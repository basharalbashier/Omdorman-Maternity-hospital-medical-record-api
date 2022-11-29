<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeObservationSheetRequest;
use App\Http\Requests\UpdateGynaeObservationSheetRequest;
use App\Models\GynaeObservationSheet;

class GynaeObservationSheetController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaeObservationSheetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGynaeObservationSheetRequest $request)
    {
        //
        return GynaeObservationSheet::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeObservationSheet  $gynaeObservationSheet
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeObservationSheet $gynaeObservationSheet)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeObservationSheet  $gynaeObservationSheet
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeObservationSheet $gynaeObservationSheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeObservationSheetRequest  $request
     * @param  \App\Models\GynaeObservationSheet  $gynaeObservationSheet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeObservationSheetRequest $request, GynaeObservationSheet $gynaeObservationSheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeObservationSheet  $gynaeObservationSheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeObservationSheet $gynaeObservationSheet)
    {
        //
    }


    public function patientid($id)
    {
        
        return GynaeObservationSheet::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeObservationSheet::where('file_id', '=' ,$id)->get();
    }
}
