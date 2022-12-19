<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIcuVitalSignRequest;
use App\Http\Requests\UpdateIcuVitalSignRequest;
use App\Models\IcuVitalSign;

class IcuVitalSignController extends Controller
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
     * @param  \App\Http\Requests\StoreIcuVitalSignRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIcuVitalSignRequest $request)
    {
        //
        return IcuVitalSign::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IcuVitalSign  $icuVitalSign
     * @return \Illuminate\Http\Response
     */
    public function show(IcuVitalSign $icuVitalSign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IcuVitalSign  $icuVitalSign
     * @return \Illuminate\Http\Response
     */
    public function edit(IcuVitalSign $icuVitalSign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIcuVitalSignRequest  $request
     * @param  \App\Models\IcuVitalSign  $icuVitalSign
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIcuVitalSignRequest $request, IcuVitalSign $icuVitalSign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IcuVitalSign  $icuVitalSign
     * @return \Illuminate\Http\Response
     */
    public function destroy(IcuVitalSign $icuVitalSign)
    {
        //
    }
    public function fileid($id)
    {
        
        return IcuVitalSign::where('file_id', '=' ,$id)->get();
    }
}
