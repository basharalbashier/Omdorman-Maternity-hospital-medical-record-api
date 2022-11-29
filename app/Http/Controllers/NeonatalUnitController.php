<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalUnitRequest;
use App\Http\Requests\UpdateNeonatalUnitRequest;
use App\Models\NeonatalUnit;
use Illuminate\Http\Request;

class NeonatalUnitController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalUnitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return NeonatalUnit::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalUnit  $neonatalUnit
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalUnit $neonatalUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalUnit  $neonatalUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalUnit $neonatalUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalUnitRequest  $request
     * @param  \App\Models\NeonatalUnit  $neonatalUnit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalUnitRequest $request, NeonatalUnit $neonatalUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalUnit  $neonatalUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalUnit $neonatalUnit)
    {
        //
    }


    public function patientid($id)
    {
        
        return NeonatalUnit::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalUnit::where('file_id', '=' ,$id)->get();
    }
}
