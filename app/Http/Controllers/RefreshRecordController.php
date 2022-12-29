<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRefreshRecordRequest;
use App\Http\Requests\UpdateRefreshRecordRequest;
use App\Models\RefreshRecord;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RefreshRecordController extends Controller
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
     * @param  \App\Http\Requests\StoreRefreshRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRefreshRecordRequest $request)
    {
     
        return RefreshRecord::create($request->all());    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RefreshRecord  $refreshRecord
     * @return \Illuminate\Http\Response
     */
    public function show(RefreshRecord $refreshRecord)
    {
        //
    }
    public function fileid($id)
    {
        
        
        return RefreshRecord::where('file_id', '=' ,$id)->get();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RefreshRecord  $refreshRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(RefreshRecord $refreshRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRefreshRecordRequest  $request
     * @param  \App\Models\RefreshRecord  $refreshRecord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefreshRecordRequest $request, RefreshRecord $refreshRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RefreshRecord  $refreshRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(RefreshRecord $refreshRecord)
    {
        //
    }



    
}
