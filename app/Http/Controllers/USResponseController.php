<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreuSResponseRequest;
use App\Http\Requests\UpdateuSResponseRequest;
use App\Models\uSRequest;
use App\Models\uSResponse;
use App\Policies\USRequestPolicy;

class USResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return uSResponse::all();
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

        $updateRequest = uSRequest::find($request['request_id']);


        // Make sure you've got the Page model
        if ($updateRequest) {
            $updateRequest['status'] = '2';
            $updateRequest->save();


            return uSResponse::create($request->all());
        }else{

            return "no";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return uSResponse::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\uSResponse  $uSResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(uSResponse $uSResponse)
    {
        //
    }

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
        $us = uSResponse::find($id);
        $us->update($request->all());
        return $us;
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

        return uSResponse::where('patient_id', '=', $id)->get();
    }

    public function fileid($id)
    {

        return uSResponse::where('file_id', '=', $id)->get();
    }

    public function requestid($id)
    {

        return uSResponse::where('request_id', '=', $id)->get();
    }
}
