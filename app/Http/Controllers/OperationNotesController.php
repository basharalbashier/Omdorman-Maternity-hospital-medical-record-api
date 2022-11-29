<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOperationNotesRequest;
use App\Http\Requests\UpdateOperationNotesRequest;
use App\Models\OperationNotes;

class OperationNotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return OperationNotes::all();
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
     * @param  \App\Http\Requests\StoreOperationNotesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOperationNotesRequest $request)
    {
        return OperationNotes::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OperationNotes  $operationNotes
     * @return \Illuminate\Http\Response
     */
    public function show(OperationNotes $operationNotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OperationNotes  $operationNotes
     * @return \Illuminate\Http\Response
     */
    public function edit(OperationNotes $operationNotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOperationNotesRequest  $request
     * @param  \App\Models\OperationNotes  $operationNotes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOperationNotesRequest $request, OperationNotes $operationNotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OperationNotes  $operationNotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperationNotes $operationNotes)
    {
        //
    }


    public function patientid($id)
    {
        
        return OperationNotes::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return OperationNotes::where('file_id', '=' ,$id)->get();
    }
}
