<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeFileRequest;
use App\Http\Requests\UpdateGynaeFileRequest;
use App\Models\GynaeFile;
use Illuminate\Http\Request;

class GynaeFileController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaeFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaeFile::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeFile  $gynaeFile
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeFile $gynaeFile)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeFile  $gynaeFile
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeFile $gynaeFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeFileRequest  $request
     * @param  \App\Models\GynaeFile  $gynaeFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeFileRequest $request, GynaeFile $gynaeFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeFile  $gynaeFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeFile $gynaeFile)
    {
        //
    }

    public function patientid($id)
    {
        
        return GynaeFile::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeFile::where('file_id', '=' ,$id)->get();
    }


    public function unit($id)
{
    
    return GynaeFile::where('unit', '=' ,$id)->get();
}

}
