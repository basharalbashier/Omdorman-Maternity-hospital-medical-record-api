<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatisticFormRequest;
use App\Http\Requests\UpdateStatisticFormRequest;
use App\Models\StatisticForm;

class StatisticFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StatisticForm::all();
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
     * @param  \App\Http\Requests\StoreStatisticFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatisticFormRequest $request)
    {
        //
        return StatisticForm::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatisticForm  $statisticForm
     * @return \Illuminate\Http\Response
     */
    public function show(StatisticForm $statisticForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatisticForm  $statisticForm
     * @return \Illuminate\Http\Response
     */
    public function edit(StatisticForm $statisticForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatisticFormRequest  $request
     * @param  \App\Models\StatisticForm  $statisticForm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatisticFormRequest $request, StatisticForm $statisticForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatisticForm  $statisticForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatisticForm $statisticForm)
    {
        //
    }
}
