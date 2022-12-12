<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaturationalAssessmentRequest;
use App\Http\Requests\UpdateMaturationalAssessmentRequest;
use App\Models\MaturationalAssessment;

class MaturationalAssessmentController extends Controller
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
     * @param  \App\Http\Requests\StoreMaturationalAssessmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaturationalAssessmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaturationalAssessment  $maturationalAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(MaturationalAssessment $maturationalAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaturationalAssessment  $maturationalAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit(MaturationalAssessment $maturationalAssessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaturationalAssessmentRequest  $request
     * @param  \App\Models\MaturationalAssessment  $maturationalAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaturationalAssessmentRequest $request, MaturationalAssessment $maturationalAssessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaturationalAssessment  $maturationalAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaturationalAssessment $maturationalAssessment)
    {
        //
    }
}
