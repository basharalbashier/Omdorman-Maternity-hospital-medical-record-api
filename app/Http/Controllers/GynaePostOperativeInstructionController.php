<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaePostOperativeInstructionRequest;
use App\Http\Requests\UpdateGynaePostOperativeInstructionRequest;
use App\Models\GynaePostOperativeInstruction;
use Illuminate\Http\Request;

class GynaePostOperativeInstructionController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaePostOperativeInstructionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaePostOperativeInstruction::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaePostOperativeInstruction  $gynaePostOperativeInstruction
     * @return \Illuminate\Http\Response
     */
    public function show(GynaePostOperativeInstruction $gynaePostOperativeInstruction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaePostOperativeInstruction  $gynaePostOperativeInstruction
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaePostOperativeInstruction $gynaePostOperativeInstruction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaePostOperativeInstructionRequest  $request
     * @param  \App\Models\GynaePostOperativeInstruction  $gynaePostOperativeInstruction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaePostOperativeInstructionRequest $request, GynaePostOperativeInstruction $gynaePostOperativeInstruction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaePostOperativeInstruction  $gynaePostOperativeInstruction
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaePostOperativeInstruction $gynaePostOperativeInstruction)
    {
        //
    }



    public function patientid($id)
    {
        
        return GynaePostOperativeInstruction::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaePostOperativeInstruction::where('file_id', '=' ,$id)->get();
    }
}
