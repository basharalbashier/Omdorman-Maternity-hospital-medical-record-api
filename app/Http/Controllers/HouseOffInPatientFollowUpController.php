<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHouseOffInPatientFollowUpRequest;
use App\Http\Requests\UpdateHouseOffInPatientFollowUpRequest;
use App\Models\HouseOffInPatientFollowUp;
use Illuminate\Http\Request;

class HouseOffInPatientFollowUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return HouseOffInPatientFollowUp::all();
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
     * @param  \App\Http\Requests\StoreHouseOffInPatientFollowUpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return HouseOffInPatientFollowUp::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HouseOffInPatientFollowUp  $houseOffInPatientFollowUp
     * @return \Illuminate\Http\Response
     */
    public function show(HouseOffInPatientFollowUp $houseOffInPatientFollowUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HouseOffInPatientFollowUp  $houseOffInPatientFollowUp
     * @return \Illuminate\Http\Response
     */
    public function edit(HouseOffInPatientFollowUp $houseOffInPatientFollowUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHouseOffInPatientFollowUpRequest  $request
     * @param  \App\Models\HouseOffInPatientFollowUp  $houseOffInPatientFollowUp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHouseOffInPatientFollowUpRequest $request, HouseOffInPatientFollowUp $houseOffInPatientFollowUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HouseOffInPatientFollowUp  $houseOffInPatientFollowUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(HouseOffInPatientFollowUp $houseOffInPatientFollowUp)
    {
        //
    }



    public function patientid($id)
    {
        
        return HouseOffInPatientFollowUp::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return HouseOffInPatientFollowUp::where('file_id', '=' ,$id)->get();
    }
}
