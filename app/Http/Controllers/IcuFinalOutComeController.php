<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIcuFinalOutComeRequest;
use App\Http\Requests\UpdateIcuFinalOutComeRequest;
use App\Models\IcuFinalOutCome;
use Illuminate\Http\Request;

class IcuFinalOutComeController extends Controller
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
     * @param  \App\Http\Requests\StoreIcuFinalOutComeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return IcuFinalOutCome::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IcuFinalOutCome  $icuFinalOutCome
     * @return \Illuminate\Http\Response
     */
    public function show(IcuFinalOutCome $icuFinalOutCome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IcuFinalOutCome  $icuFinalOutCome
     * @return \Illuminate\Http\Response
     */
    public function edit(IcuFinalOutCome $icuFinalOutCome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIcuFinalOutComeRequest  $request
     * @param  \App\Models\IcuFinalOutCome  $icuFinalOutCome
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIcuFinalOutComeRequest $request, IcuFinalOutCome $icuFinalOutCome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IcuFinalOutCome  $icuFinalOutCome
     * @return \Illuminate\Http\Response
     */
    public function destroy(IcuFinalOutCome $icuFinalOutCome)
    {
        //
    }


    public function patientid($id)
    {
        
        return IcuFinalOutCome::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return IcuFinalOutCome::where('file_id', '=' ,$id)->get();
    }
}
