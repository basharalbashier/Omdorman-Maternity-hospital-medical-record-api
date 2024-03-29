<?php

namespace App\Http\Controllers;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Requests\StoreWhileAneathRequest;
use App\Http\Requests\UpdateWhileAneathRequest;
use App\Models\WhileAneath;
use Illuminate\Support\Facades\Schema;

class WhileAneathController extends Controller
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
     * @param  \App\Http\Requests\StoreWhileAneathRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWhileAneathRequest $request)
    {
        //
     
        return WhileAneath::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WhileAneath  $whileAneath
     * @return \Illuminate\Http\Response
     */
    public function show(WhileAneath $whileAneath)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhileAneath  $whileAneath
     * @return \Illuminate\Http\Response
     */
    public function edit(WhileAneath $whileAneath)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWhileAneathRequest  $request
     * @param  \App\Models\WhileAneath  $whileAneath
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWhileAneathRequest $request, WhileAneath $whileAneath)
    {
        //
    }
    public function fileid($id)
    {
        
        return WhileAneath::where('file_id', '=' ,$id)->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhileAneath  $whileAneath
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhileAneath $whileAneath)
    {
        //
    }


    
}
