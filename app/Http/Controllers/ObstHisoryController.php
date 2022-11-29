<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateObstHisoryRequest;
use App\Models\ObstHisory;

class ObstHisoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ObstHisory::all();
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
     * @param  \App\Http\Requests\StoreObstHisoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    //     $request->validate([
    //   'unit'=>'required',
    //   'gr'=>'required',
    //   'para'=>'required',

    //   'one'=>'required',
    //   'two'=>'required',
    //   'three'=>'required',
    //   'four'=>'required',
    //   'five'=>'required',
    //   'six'=>'required',
    //   'seven'=>'required',
    //   'eight'=>'required',
    //   'nine'=>'required',
    //   'ten'=>'required',

    //   'lmp'=>'required',
    //   'edd'=>'required',
    //   'scan_edd'=>'required',
    //   'weeks'=>'required',
    //   'past_m_history'=>'required',
    //   'past_s_history'=>'required',
    //   'drug_history'=>'required',
    //   'social_history'=>'required',

    //   'hypertention'=>'required',
    //   'diabetes'=>'required',
    //   'multiple_pregnancy'=>'required',
    //   'others'=>'required',

    //   'others'=>'required',
    //   'chest_cvs_exam'=>'required',
    //   'comments_and_social_plans'=>'required',
    //   'dr_id'=>'required',
    //   'patient_id'=>'required',
    //   'file_id'=>'required',

    //     ]);
        return ObstHisory::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ObstHisory  $obstHisory
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        return ObstHisory::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ObstHisory  $obstHisory
     * @return \Illuminate\Http\Response
     */
    public function edit(ObstHisory $obstHisory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateObstHisoryRequest  $request
     * @param  \App\Models\ObstHisory  $obstHisory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObstHisoryRequest $request, ObstHisory $obstHisory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ObstHisory  $obstHisory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ObstHisory $obstHisory)
    {
        //
    }


    public function patientid($id)
    {
        
        return ObstHisory::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return ObstHisory::where('file_id', '=' ,$id)->get();
    }
}
