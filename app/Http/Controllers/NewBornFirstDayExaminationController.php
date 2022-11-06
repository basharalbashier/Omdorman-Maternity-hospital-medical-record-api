<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewBornFirstDayExaminationRequest;
use App\Http\Requests\UpdateNewBornFirstDayExaminationRequest;
use App\Models\NewBornFirstDayExamination;

class NewBornFirstDayExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return NewBornFirstDayExamination::all();
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
     * @param  \App\Http\Requests\StoreNewBornFirstDayExaminationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewBornFirstDayExaminationRequest $request)
    {
        //
        return NewBornFirstDayExamination::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewBornFirstDayExamination  $newBornFirstDayExamination
     * @return \Illuminate\Http\Response
     */
    public function show(NewBornFirstDayExamination $newBornFirstDayExamination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewBornFirstDayExamination  $newBornFirstDayExamination
     * @return \Illuminate\Http\Response
     */
    public function edit(NewBornFirstDayExamination $newBornFirstDayExamination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewBornFirstDayExaminationRequest  $request
     * @param  \App\Models\NewBornFirstDayExamination  $newBornFirstDayExamination
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewBornFirstDayExaminationRequest $request, NewBornFirstDayExamination $newBornFirstDayExamination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewBornFirstDayExamination  $newBornFirstDayExamination
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewBornFirstDayExamination $newBornFirstDayExamination)
    {
        //
    }
}
