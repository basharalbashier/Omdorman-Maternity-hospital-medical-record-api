<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalAdmissionRequest;
use App\Http\Requests\UpdateNeonatalAdmissionRequest;
use App\Models\NeonatalAdmission;
use Illuminate\Http\Request;

class NeonatalAdmissionController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalAdmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            "dr_id"=>'required',
            "file_id"=>"required"
        ]);
        return NeonatalAdmission::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalAdmission  $neonatalAdmission
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalAdmission $neonatalAdmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalAdmission  $neonatalAdmission
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalAdmission $neonatalAdmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalAdmissionRequest  $request
     * @param  \App\Models\NeonatalAdmission  $neonatalAdmission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalAdmissionRequest $request, NeonatalAdmission $neonatalAdmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalAdmission  $neonatalAdmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalAdmission $neonatalAdmission)
    {
        //
    }


    public function patientid($id)
    {
        
        return NeonatalAdmission::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalAdmission::where('file_id', '=' ,$id)->get();
    }
}
