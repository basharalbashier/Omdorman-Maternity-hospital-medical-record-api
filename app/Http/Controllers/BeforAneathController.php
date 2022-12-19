<?php

namespace App\Http\Controllers;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Requests\StoreBeforAneathRequest;
use App\Http\Requests\UpdateBeforAneathRequest;
use App\Models\BeforAneath;
use Illuminate\Support\Facades\Schema;

class BeforAneathController extends Controller
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
     * @param  \App\Http\Requests\StoreBeforAneathRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeforAneathRequest $request)
    {
        //connection('sqlite')->

        return BeforAneath::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BeforAneath  $beforAneath
     * @return \Illuminate\Http\Response
     */
    public function show(BeforAneath $beforAneath)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BeforAneath  $beforAneath
     * @return \Illuminate\Http\Response
     */
    public function edit(BeforAneath $beforAneath)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBeforAneathRequest  $request
     * @param  \App\Models\BeforAneath  $beforAneath
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBeforAneathRequest $request, BeforAneath $beforAneath)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BeforAneath  $beforAneath
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeforAneath $beforAneath)
    {
        //
    }

    public function fileid($id)
    {
        
        return BeforAneath::where('file_id', '=' ,$id)->get();
    }
}
