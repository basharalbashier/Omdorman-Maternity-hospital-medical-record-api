<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNeonatalProblemListRequest;
use App\Http\Requests\UpdateNeonatalProblemListRequest;
use App\Models\NeonatalProblemList;
use Illuminate\Http\Request;

class NeonatalProblemListController extends Controller
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
     * @param  \App\Http\Requests\StoreNeonatalProblemListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return NeonatalProblemList::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NeonatalProblemList  $neonatalProblemList
     * @return \Illuminate\Http\Response
     */
    public function show(NeonatalProblemList $neonatalProblemList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NeonatalProblemList  $neonatalProblemList
     * @return \Illuminate\Http\Response
     */
    public function edit(NeonatalProblemList $neonatalProblemList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeonatalProblemListRequest  $request
     * @param  \App\Models\NeonatalProblemList  $neonatalProblemList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeonatalProblemListRequest $request, NeonatalProblemList $neonatalProblemList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NeonatalProblemList  $neonatalProblemList
     * @return \Illuminate\Http\Response
     */
    public function destroy(NeonatalProblemList $neonatalProblemList)
    {
        //
    }


    public function patientid($id)
    {
        
        return NeonatalProblemList::where('patient_id', '=' ,$id)->get();
    }

    public function fileid($id)
    {
        
        return NeonatalProblemList::where('file_id', '=' ,$id)->get();
    }
}
