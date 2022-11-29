<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIcuAdmissionRequest;
use App\Http\Requests\UpdateIcuAdmissionRequest;
use App\Models\IcuAdmission;
use Illuminate\Http\Request;

class IcuAdmissionController extends Controller
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
     * @param  \App\Http\Requests\StoreIcuAdmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return IcuAdmission::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IcuAdmission  $icuAdmission
     * @return \Illuminate\Http\Response
     */
    public function show(IcuAdmission $icuAdmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IcuAdmission  $icuAdmission
     * @return \Illuminate\Http\Response
     */
    public function edit(IcuAdmission $icuAdmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIcuAdmissionRequest  $request
     * @param  \App\Models\IcuAdmission  $icuAdmission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIcuAdmissionRequest $request, IcuAdmission $icuAdmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IcuAdmission  $icuAdmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(IcuAdmission $icuAdmission)
    {
        //
    }


    public function patientid($id)
    {
        
        return IcuAdmission::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return IcuAdmission::where('file_id', '=' ,$id)->get();
    }
}
