<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGynaePreOpCheckListRequest;
use App\Http\Requests\UpdateGynaePreOpCheckListRequest;
use App\Models\GynaePreOpCheckList;
use Illuminate\Http\Request;

class GynaePreOpCheckListController extends Controller
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
     * @param  \App\Http\Requests\StoreGynaePreOpCheckListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return GynaePreOpCheckList::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GynaePreOpCheckList  $gynaePreOpCheckList
     * @return \Illuminate\Http\Response
     */
    public function show(GynaePreOpCheckList $gynaePreOpCheckList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GynaePreOpCheckList  $gynaePreOpCheckList
     * @return \Illuminate\Http\Response
     */
    public function edit(GynaePreOpCheckList $gynaePreOpCheckList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGynaePreOpCheckListRequest  $request
     * @param  \App\Models\GynaePreOpCheckList  $gynaePreOpCheckList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGynaePreOpCheckListRequest $request, GynaePreOpCheckList $gynaePreOpCheckList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GynaePreOpCheckList  $gynaePreOpCheckList
     * @return \Illuminate\Http\Response
     */
    public function destroy(GynaePreOpCheckList $gynaePreOpCheckList)
    {
        //
    }



    public function patientid($id)
    {
        
        return GynaePreOpCheckList::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return GynaePreOpCheckList::where('file_id', '=' ,$id)->get();
    }
}
