<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalOpservationsheetRequest;
use App\Http\Requests\UpdateNeonatalOpservationsheetRequest;
use App\Models\NeonatalOpservationsheet;
use Illuminate\Http\Request;

class NeonatalOpservationsheetController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalOpservationsheetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return NeonatalOpservationsheet::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalOpservationsheet  $neonatalOpservationsheet
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalOpservationsheet $neonatalOpservationsheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalOpservationsheet  $neonatalOpservationsheet
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalOpservationsheet $neonatalOpservationsheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalOpservationsheetRequest  $request
     * @param  \App\Models\NeonatalOpservationsheet  $neonatalOpservationsheet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalOpservationsheetRequest $request, NeonatalOpservationsheet $neonatalOpservationsheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalOpservationsheet  $neonatalOpservationsheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalOpservationsheet $neonatalOpservationsheet)
    {
        //
    }


    public function patientid($id)
    {
        
        return NeonatalOpservationsheet::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalOpservationsheet::where('file_id', '=' ,$id)->get();
    }
}
