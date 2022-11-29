<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAntAddmRequest;
use App\Http\Requests\UpdateAntAddmRequest;
use App\Models\AntAddm;
use Illuminate\Http\Request;

class AntAddmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return AntAddm::all();
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
     * @param  \App\Http\Requests\StoreAntAddmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
     
            // 'unit'=>'required',
            // 'complaint'=>'required',
            // 'history_presenting_illness'=>'required',
            // 'pulse'=>'required',
            // 'bp'=>'required',
            // 'temp'=>'required',
            // 'general_condition'=>'required',
            // 'cvs_chest_examination'=>'required',
            // 'fundel_height'=>'required',
            // 'lie'=>'required',
            // 'presentation'=>'required',
            // 'fhr'=>'required',
            // 'fm'=>'required',
            // 'vaginal_exam'=>'required',
            // 'diagnosis'=>'required',
            // 'immediat_instrunction'=>'required',
            // 'dr_id'=>'required',
            // 'patient_id'=>'required',




        ]);
        return AntAddm::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AntAddm  $antAddm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //        return ReqularDrugsDosage::where('regular_drug_id', $drugId);
        return AntAddm::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AntAddm  $antAddm
     * @return \Illuminate\Http\Response
     */
    public function edit(AntAddm $antAddm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAntAddmRequest  $request
     * @param  \App\Models\AntAddm  $antAddm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAntAddmRequest $request, AntAddm $antAddm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AntAddm  $antAddm
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntAddm $antAddm)
    {
        //
    }



    public function patientid($id)
    {
        
        return AntAddm::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return AntAddm::where('file_id', '=' ,$id)->get();
    }
}
