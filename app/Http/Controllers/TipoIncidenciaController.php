<?php

namespace App\Http\Controllers;

use App\Models\TipoIncidencia;
use App\Http\Requests\StoreTipoIncidenciaRequest;
use App\Http\Requests\UpdateTipoIncidenciaRequest;

class TipoIncidenciaController extends Controller
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
     * @param  \App\Http\Requests\StoreTipoIncidenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoIncidenciaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function show(TipoIncidencia $tipoIncidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoIncidencia $tipoIncidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoIncidenciaRequest  $request
     * @param  \App\Models\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoIncidenciaRequest $request, TipoIncidencia $tipoIncidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoIncidencia $tipoIncidencia)
    {
        //
    }
}
