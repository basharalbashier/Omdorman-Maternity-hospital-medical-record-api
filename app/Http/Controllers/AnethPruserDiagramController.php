<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnethPruserDiagramRequest;
use App\Http\Requests\UpdateAnethPruserDiagramRequest;
use App\Models\AnethPruserDiagram;

class AnethPruserDiagramController extends Controller
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
     * @param  \App\Http\Requests\StoreAnethPruserDiagramRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnethPruserDiagramRequest $request)
    {
        return AnethPruserDiagram::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnethPruserDiagram  $anethPruserDiagram
     * @return \Illuminate\Http\Response
     */
    public function show(AnethPruserDiagram $anethPruserDiagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnethPruserDiagram  $anethPruserDiagram
     * @return \Illuminate\Http\Response
     */
    public function edit(AnethPruserDiagram $anethPruserDiagram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnethPruserDiagramRequest  $request
     * @param  \App\Models\AnethPruserDiagram  $anethPruserDiagram
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnethPruserDiagramRequest $request, AnethPruserDiagram $anethPruserDiagram)
    {
        //
    }

    public function fileid($id)
    {
        
        return AnethPruserDiagram::where('file_id', '=' ,$id)->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnethPruserDiagram  $anethPruserDiagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnethPruserDiagram $anethPruserDiagram)
    {
        //
    }
}
