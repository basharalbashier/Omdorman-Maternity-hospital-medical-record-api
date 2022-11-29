<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalFileRequest;
use App\Http\Requests\UpdateNeonatalFileRequest;
use App\Models\NeonatalFile;
use Illuminate\Http\Request;

class NeonatalFileController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return NeonatalFile::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalFile  $neonatalFile
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalFile $neonatalFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalFile  $neonatalFile
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalFile $neonatalFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalFileRequest  $request
     * @param  \App\Models\NeonatalFile  $neonatalFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalFileRequest $request, NeonatalFile $neonatalFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalFile  $neonatalFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalFile $neonatalFile)
    {
        //
    }


}
