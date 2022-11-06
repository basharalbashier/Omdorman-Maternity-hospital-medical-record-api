<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNutritionAssessmentFormRequest;
use App\Http\Requests\UpdateNutritionAssessmentFormRequest;
use App\Models\NutritionAssessmentForm;

class NutritionAssessmentFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return NutritionAssessmentForm::all();
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
     * @param  \App\Http\Requests\StoreNutritionAssessmentFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNutritionAssessmentFormRequest $request)
    {
        return NutritionAssessmentForm::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NutritionAssessmentForm  $nutritionAssessmentForm
     * @return \Illuminate\Http\Response
     */
    public function show(NutritionAssessmentForm $nutritionAssessmentForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NutritionAssessmentForm  $nutritionAssessmentForm
     * @return \Illuminate\Http\Response
     */
    public function edit(NutritionAssessmentForm $nutritionAssessmentForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNutritionAssessmentFormRequest  $request
     * @param  \App\Models\NutritionAssessmentForm  $nutritionAssessmentForm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNutritionAssessmentFormRequest $request, NutritionAssessmentForm $nutritionAssessmentForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NutritionAssessmentForm  $nutritionAssessmentForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(NutritionAssessmentForm $nutritionAssessmentForm)
    {
        //
    }
}
