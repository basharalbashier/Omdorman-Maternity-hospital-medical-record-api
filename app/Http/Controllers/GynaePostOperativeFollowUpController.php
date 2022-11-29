<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaePostOperativeFollowUpRequest;
use App\Http\Requests\UpdateGynaePostOperativeFollowUpRequest;
use App\Models\GynaePostOperativeFollowUp;
use Illuminate\Http\Request;

class GynaePostOperativeFollowUpController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaePostOperativeFollowUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaePostOperativeFollowUp::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaePostOperativeFollowUp  $gynaePostOperativeFollowUp
     * @return \Illuminate\Http\Response
     */
    public function show(GynaePostOperativeFollowUp $gynaePostOperativeFollowUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaePostOperativeFollowUp  $gynaePostOperativeFollowUp
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaePostOperativeFollowUp $gynaePostOperativeFollowUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaePostOperativeFollowUpRequest  $request
     * @param  \App\Models\GynaePostOperativeFollowUp  $gynaePostOperativeFollowUp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaePostOperativeFollowUpRequest $request, GynaePostOperativeFollowUp $gynaePostOperativeFollowUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaePostOperativeFollowUp  $gynaePostOperativeFollowUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaePostOperativeFollowUp $gynaePostOperativeFollowUp)
    {
        //
    }


    public function patientid($id)
    {
        
        return GynaePostOperativeFollowUp::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaePostOperativeFollowUp::where('file_id', '=' ,$id)->get();
    }
}
