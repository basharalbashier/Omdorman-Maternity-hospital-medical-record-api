<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReqularDrugsDosageRequest;
use App\Http\Requests\UpdateReqularDrugsDosageRequest;
use App\Models\RegularDrug;
use App\Models\ReqularDrugsDosage;

class ReqularDrugsDosageController extends Controller
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
     * @param  \App\Http\Requests\StoreReqularDrugsDosageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        //
        return ReqularDrugsDosage::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReqularDrugsDosage  $reqularDrugsDosage
     * @return \Illuminate\Http\Response
     */
    public function show( $drugId)
    {
        //
        return ReqularDrugsDosage::where('regular_drug_id', $drugId);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReqularDrugsDosage  $reqularDrugsDosage
     * @return \Illuminate\Http\Response
     */
    public function edit(ReqularDrugsDosage $reqularDrugsDosage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReqularDrugsDosageRequest  $request
     * @param  \App\Models\ReqularDrugsDosage  $reqularDrugsDosage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReqularDrugsDosageRequest $request, ReqularDrugsDosage $reqularDrugsDosage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReqularDrugsDosage  $reqularDrugsDosage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReqularDrugsDosage $reqularDrugsDosage)
    {
        //
    }


    public function patientid($id)
    {
        
        return ReqularDrugsDosage::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return ReqularDrugsDosage::where('file_id', '=' ,$id)->get();
    }
}
