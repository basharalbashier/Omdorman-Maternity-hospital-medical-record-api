<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecordOfAttendanceAtTheTimeOfDeliveryRequest;
use App\Http\Requests\UpdateRecordOfAttendanceAtTheTimeOfDeliveryRequest;
use App\Models\RecordOfAttendanceAtTheTimeOfDelivery;

class RecordOfAttendanceAtTheTimeOfDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return RecordOfAttendanceAtTheTimeOfDelivery::all();
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
     * @param  \App\Http\Requests\StoreRecordOfAttendanceAtTheTimeOfDeliveryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecordOfAttendanceAtTheTimeOfDeliveryRequest $request)
    {
        return RecordOfAttendanceAtTheTimeOfDelivery::create($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecordOfAttendanceAtTheTimeOfDelivery  $recordOfAttendanceAtTheTimeOfDelivery
     * @return \Illuminate\Http\Response
     */
    public function show(RecordOfAttendanceAtTheTimeOfDelivery $recordOfAttendanceAtTheTimeOfDelivery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecordOfAttendanceAtTheTimeOfDelivery  $recordOfAttendanceAtTheTimeOfDelivery
     * @return \Illuminate\Http\Response
     */
    public function edit(RecordOfAttendanceAtTheTimeOfDelivery $recordOfAttendanceAtTheTimeOfDelivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecordOfAttendanceAtTheTimeOfDeliveryRequest  $request
     * @param  \App\Models\RecordOfAttendanceAtTheTimeOfDelivery  $recordOfAttendanceAtTheTimeOfDelivery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecordOfAttendanceAtTheTimeOfDeliveryRequest $request, RecordOfAttendanceAtTheTimeOfDelivery $recordOfAttendanceAtTheTimeOfDelivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecordOfAttendanceAtTheTimeOfDelivery  $recordOfAttendanceAtTheTimeOfDelivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecordOfAttendanceAtTheTimeOfDelivery $recordOfAttendanceAtTheTimeOfDelivery)
    {
        //
    }
}
