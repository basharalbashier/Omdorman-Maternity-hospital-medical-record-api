<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeClinicalDischargeSummaryRequest;
use App\Http\Requests\UpdateGynaeClinicalDischargeSummaryRequest;
use App\Models\GynaeClinicalDischargeSummary;
use Illuminate\Http\Request;

class GynaeClinicalDischargeSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return GynaeClinicalDischargeSummary::all();
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
     * @param  \App\Http\Requests\StoreGynaeClinicalDischargeSummaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaeClinicalDischargeSummary::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeClinicalDischargeSummary  $gynaeClinicalDischargeSummary
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeClinicalDischargeSummary $gynaeClinicalDischargeSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeClinicalDischargeSummary  $gynaeClinicalDischargeSummary
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeClinicalDischargeSummary $gynaeClinicalDischargeSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeClinicalDischargeSummaryRequest  $request
     * @param  \App\Models\GynaeClinicalDischargeSummary  $gynaeClinicalDischargeSummary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeClinicalDischargeSummaryRequest $request, GynaeClinicalDischargeSummary $gynaeClinicalDischargeSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeClinicalDischargeSummary  $gynaeClinicalDischargeSummary
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeClinicalDischargeSummary $gynaeClinicalDischargeSummary)
    {
        //
    }
    public function patientid($id)
    {
        
        return GynaeClinicalDischargeSummary::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeClinicalDischargeSummary::where('file_id', '=' ,$id)->get();
    }
}
