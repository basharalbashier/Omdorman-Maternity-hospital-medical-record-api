<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLabRequestFormRequest;
use App\Http\Requests\UpdateLabRequestFormRequest;
use App\Models\LabRequestForm;

class LabRequestFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return LabRequestForm::all();

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
     * @param  \App\Http\Requests\StoreLabRequestFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        //
        $request->validate([
            'money'=>'required',
   
        ]);
        return LabRequestForm::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LabRequestForm  $labRequestForm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  return LabRequestForm::find($id);
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LabRequestForm  $labRequestForm
     * @return \Illuminate\Http\Response
     */
    public function edit(LabRequestForm $labRequestForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLabRequestFormRequest  $request
     * @param  \App\Models\LabRequestForm  $labRequestForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $test = LabRequestForm::find($id);
        $test->update($request->all());
        return $test;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LabRequestForm  $labRequestForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabRequestForm $labRequestForm)
    {
        //
    }

    public function patientid($id)
    {
        
        return LabRequestForm::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id,Request $request)
    {
        // $user=User::where('email', $fields['email'])->where('password', $fields['password'])->first();
        return LabRequestForm::where('file_id', '=' ,$id)->where('type', $request['type'])->get();
    }
}
