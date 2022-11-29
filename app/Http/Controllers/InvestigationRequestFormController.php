<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvestigationRequestFormRequest;
use App\Http\Requests\UpdateInvestigationRequestFormRequest;
use App\Models\InvestigationRequestForm;

class InvestigationRequestFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return InvestigationRequestForm::all();
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
     * @param  \App\Http\Requests\StoreInvestigationRequestFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvestigationRequestFormRequest $request)
    {
        //
        return InvestigationRequestForm::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvestigationRequestForm  $investigationRequestForm
     * @return \Illuminate\Http\Response
     */
    public function show(InvestigationRequestForm $investigationRequestForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestigationRequestForm  $investigationRequestForm
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestigationRequestForm $investigationRequestForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvestigationRequestFormRequest  $request
     * @param  \App\Models\InvestigationRequestForm  $investigationRequestForm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvestigationRequestFormRequest $request, InvestigationRequestForm $investigationRequestForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestigationRequestForm  $investigationRequestForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvestigationRequestForm $investigationRequestForm)
    {
        //
    }


    public function patientid($id)
    {
        
        return InvestigationRequestForm::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return InvestigationRequestForm::where('file_id', '=' ,$id)->get();
    }
}
