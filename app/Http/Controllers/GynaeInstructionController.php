<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeInstructionRequest;
use App\Http\Requests\UpdateGynaeInstructionRequest;
use App\Models\GynaeInstruction;
use Illuminate\Http\Request;

class GynaeInstructionController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaeInstructionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaeInstruction::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeInstruction  $gynaeInstruction
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeInstruction $gynaeInstruction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeInstruction  $gynaeInstruction
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeInstruction $gynaeInstruction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeInstructionRequest  $request
     * @param  \App\Models\GynaeInstruction  $gynaeInstruction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeInstructionRequest $request, GynaeInstruction $gynaeInstruction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeInstruction  $gynaeInstruction
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeInstruction $gynaeInstruction)
    {
        //
    }



    public function patientid($id)
    {
        
        return GynaeInstruction::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeInstruction::where('file_id', '=' ,$id)->get();
    }
}
