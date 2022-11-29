<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnticoagulationChartRequest;
use App\Http\Requests\UpdateAnticoagulationChartRequest;
use App\Models\AnticoagulationChart;
use Illuminate\Http\Request;

class AnticoagulationChartController extends Controller
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
     * @param  \App\Http\Requests\StoreAnticoagulationChartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return  AnticoagulationChart::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnticoagulationChart  $anticoagulationChart
     * @return \Illuminate\Http\Response
     */
    public function show(AnticoagulationChart $anticoagulationChart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnticoagulationChart  $anticoagulationChart
     * @return \Illuminate\Http\Response
     */
    public function edit(AnticoagulationChart $anticoagulationChart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnticoagulationChartRequest  $request
     * @param  \App\Models\AnticoagulationChart  $anticoagulationChart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnticoagulationChartRequest $request, AnticoagulationChart $anticoagulationChart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnticoagulationChart  $anticoagulationChart
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnticoagulationChart $anticoagulationChart)
    {
        //
    }

    public function patientid($id)
    {
        
        return AnticoagulationChart::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return AnticoagulationChart::where('file_id', '=' ,$id)->get();
    }
}
