<?php

namespace App\Http\Controllers;

use App\Maestro;
use App\UnidadEducativa;
use Illuminate\Http\Request;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros = Maestro::all();
        $count = 0;
        return view('maestro.index', compact('maestros', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidad_educativa = UnidadEducativa::all();
        return view('maestro.create', compact('unidad_educativa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'ci' => 'required|unique:maestros',
            'nombre' => 'required',
            'materia' => 'required',
            'experiencia' => 'required',
            'UnidadEducativa' => 'required'
        ];

        $messages = [
            'ci.required' => 'Se requiere el carnet de identidad',
            'ci.unique' => 'El carnet ya fue registrado'
        ];

        $this->validate($request, $rules, $messages);
        $maestro = new Maestro;
        $maestro->ci = $request->ci;
        $maestro->nombre = $request->nombre;
        $maestro->materia = $request->materia;
        $maestro->experiencia = $request->experiencia;
        $maestro->unidad_educativa_id = $request->UnidadEducativa;
        $maestro->save();
        return redirect()->route('maestro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function show(Maestro $maestro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function edit(Maestro $maestro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maestro $maestro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maestro  $maestro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maestro $maestro)
    {
        //
    }
}
