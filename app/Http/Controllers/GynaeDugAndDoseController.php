<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeDugAndDoseRequest;
use App\Http\Requests\UpdateGynaeDugAndDoseRequest;
use App\Models\GynaeDugAndDose;
use Illuminate\Http\Request;

class GynaeDugAndDoseController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaeDugAndDoseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaeDugAndDose::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeDugAndDose  $gynaeDugAndDose
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeDugAndDose $gynaeDugAndDose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeDugAndDose  $gynaeDugAndDose
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeDugAndDose $gynaeDugAndDose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeDugAndDoseRequest  $request
     * @param  \App\Models\GynaeDugAndDose  $gynaeDugAndDose
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeDugAndDoseRequest $request, GynaeDugAndDose $gynaeDugAndDose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeDugAndDose  $gynaeDugAndDose
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeDugAndDose $gynaeDugAndDose)
    {
        //
    }



    public function patientid($id)
    {
        
        return GynaeDugAndDose::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeDugAndDose::where('file_id', '=' ,$id)->get();
    }
}
