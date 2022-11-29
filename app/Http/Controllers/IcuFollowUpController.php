<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIcuFollowUpRequest;
use App\Http\Requests\UpdateIcuFollowUpRequest;
use App\Models\IcuFollowUp;
use Illuminate\Http\Request;

class IcuFollowUpController extends Controller
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
     * @param  \App\Http\Requests\StoreIcuFollowUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return IcuFollowUp::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IcuFollowUp  $icuFollowUp
     * @return \Illuminate\Http\Response
     */
    public function show(IcuFollowUp $icuFollowUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IcuFollowUp  $icuFollowUp
     * @return \Illuminate\Http\Response
     */
    public function edit(IcuFollowUp $icuFollowUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIcuFollowUpRequest  $request
     * @param  \App\Models\IcuFollowUp  $icuFollowUp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIcuFollowUpRequest $request, IcuFollowUp $icuFollowUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IcuFollowUp  $icuFollowUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(IcuFollowUp $icuFollowUp)
    {
        //
    }


    public function patientid($id)
    {
        
        return IcuFollowUp::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return IcuFollowUp::where('file_id', '=' ,$id)->get();
    }
}
