<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdatePatientFileRequest;
use App\Models\PatientFile;
use Illuminate\Http\Request;

class PatientFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PatientFile::all();
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
     * @param  \App\Http\Requests\StorePatientFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'unit'=>'required',
            'booking'=>'required',
            'residance'=>'required',
            'husband'=>'required',
            'husband_tel'=>'required',
            'husband_occup'=>'required',
            'patient_id'=>'required',
            'user_id'=>'required',
        ]);
        return PatientFile::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientFile  $patientFile
     * @return \Illuminate\Http\Response
     */
    public function show(PatientFile $patientFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientFile  $patientFile
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientFile $patientFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientFileRequest  $request
     * @param  \App\Models\PatientFile  $patientFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientFileRequest $request, PatientFile $patientFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientFile  $patientFile
     * @return \Illuminate\Http\Response
     */
    public function patientid($id)
    {
        
        return PatientFile::where('patient_id', '=' ,$id)->get();
    }

    public function unit($id)
    {
        
        return PatientFile::where('unit', '=' ,$id)->get();
    }

        public function file_id($id)
    {
        
        return PatientFile::where('id', '=' ,$id)->get();
    }

}


