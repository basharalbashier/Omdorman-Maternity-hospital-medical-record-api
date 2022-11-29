<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeClinicalExamRequest;
use App\Http\Requests\UpdateGynaeClinicalExamRequest;
use App\Models\GynaeClinicalExam;
use Illuminate\Http\Request;

class GynaeClinicalExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return GynaeClinicalExam::all();
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
     * @param  \App\Http\Requests\StoreGynaeClinicalExamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaeClinicalExam::create($request->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeClinicalExam  $gynaeClinicalExam
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeClinicalExam $gynaeClinicalExam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeClinicalExam  $gynaeClinicalExam
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeClinicalExam $gynaeClinicalExam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeClinicalExamRequest  $request
     * @param  \App\Models\GynaeClinicalExam  $gynaeClinicalExam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeClinicalExamRequest $request, GynaeClinicalExam $gynaeClinicalExam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeClinicalExam  $gynaeClinicalExam
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeClinicalExam $gynaeClinicalExam)
    {
        //
    }
    public function patientid($id)
    {
        
        return GynaeClinicalExam::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeClinicalExam::where('file_id', '=' ,$id)->get();
    }
}
