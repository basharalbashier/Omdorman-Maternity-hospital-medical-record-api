<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeAdmissionRequest;
use App\Http\Requests\UpdateGynaeAdmissionRequest;
use App\Models\GynaeAdmission;
use Illuminate\Http\Request;

class GynaeAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return GynaeAdmission::all();
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
     * @param  \App\Http\Requests\StoreGynaeAdmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaeAdmission::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeAdmission  $gynaeAdmission
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeAdmission $gynaeAdmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeAdmission  $gynaeAdmission
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeAdmission $gynaeAdmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeAdmissionRequest  $request
     * @param  \App\Models\GynaeAdmission  $gynaeAdmission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeAdmissionRequest $request, GynaeAdmission $gynaeAdmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeAdmission  $gynaeAdmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeAdmission $gynaeAdmission)
    {
        //
    }



    public function patientid($id)
    {
        
        return GynaeAdmission::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeAdmission::where('file_id', '=' ,$id)->get();
    }
}
