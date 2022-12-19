<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIcuResusitionRecordRequest;
use App\Http\Requests\UpdateIcuResusitionRecordRequest;
use App\Models\IcuResusitionRecord;

class IcuResusitionRecordController extends Controller
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
     * @param  \App\Http\Requests\StoreIcuResusitionRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIcuResusitionRecordRequest $request)
    {
        //
        return IcuResusitionRecord::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IcuResusitionRecord  $icuResusitionRecord
     * @return \Illuminate\Http\Response
     */
    public function show(IcuResusitionRecord $icuResusitionRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IcuResusitionRecord  $icuResusitionRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(IcuResusitionRecord $icuResusitionRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIcuResusitionRecordRequest  $request
     * @param  \App\Models\IcuResusitionRecord  $icuResusitionRecord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIcuResusitionRecordRequest $request, IcuResusitionRecord $icuResusitionRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IcuResusitionRecord  $icuResusitionRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(IcuResusitionRecord $icuResusitionRecord)
    {
        //
    }

    public function fileid($id)
    {
        
        return IcuResusitionRecord::where('file_id', '=' ,$id)->get();
    }
}
