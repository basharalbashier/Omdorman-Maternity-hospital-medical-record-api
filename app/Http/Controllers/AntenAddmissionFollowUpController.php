<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreuSResponseRequest;
use App\Http\Requests\UpdateuSResponseRequest;
use App\Models\AntenAddmissionFollowUp;
use App\Models\uSResponse;


class AntenAddmissionFollowUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return AntenAddmissionFollowUp::all();
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
     * @param  \App\Http\Requests\StoreuSResponseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        return AntenAddmissionFollowUp::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        return AntenAddmissionFollowUp::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuSResponseRequest  $request
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(uSResponse $uSResponse)
    {
        //
    }

    public function patientid($id)
    {
        
        return AntenAddmissionFollowUp::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return AntenAddmissionFollowUp::where('file_id', '=' ,$id)->get();
    }
    
}
