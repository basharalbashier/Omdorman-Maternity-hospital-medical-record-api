<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaeCommentRequest;
use App\Http\Requests\UpdateGynaeCommentRequest;
use App\Models\GynaeComment;
use Illuminate\Http\Request;

class GynaeCommentController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaeCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaeComment::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaeComment  $gynaeComment
     * @return \Illuminate\Http\Response
     */
    public function show(GynaeComment $gynaeComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaeComment  $gynaeComment
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaeComment $gynaeComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaeCommentRequest  $request
     * @param  \App\Models\GynaeComment  $gynaeComment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaeCommentRequest $request, GynaeComment $gynaeComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaeComment  $gynaeComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaeComment $gynaeComment)
    {
        //
    }

    public function patientid($id)
    {
        
        return GynaeComment::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaeComment::where('file_id', '=' ,$id)->get();
    }
}
