<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tecnology;
use App\Http\Requests\StoreTecnologyRequest;
use App\Http\Requests\UpdateTecnologyRequest;

class TecnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnologies = Tecnology::all();

        return view('admin.tecnologies.index', compact('tecnologies'));
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
     * @param  \App\Http\Requests\StoreTecnologyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTecnologyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnology $tecnology)
    {
        return view('admin.tecnologies.show', compact('tecnology'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function edit(Tecnology $tecnology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTecnologyRequest  $request
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTecnologyRequest $request, Tecnology $tecnology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnology $tecnology)
    {
        //
    }
}
