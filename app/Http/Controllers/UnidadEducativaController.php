<?php

namespace App\Http\Controllers;

use App\UnidadEducativa;
use Illuminate\Http\Request;

class UnidadEducativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = 0;
        $unidades = UnidadEducativa::all();
        return view('unidadeducativa.index', compact('unidades', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidadeducativa.create');
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
            'nombre' => 'required',
            'distrito' => 'required',
            'direccion' => 'required',
            'capacidad' => 'required'
        ];

        $messages = [
            'nombre.required' => 'El campo nombre es requerido',
            'distrito.required' => 'Este campo es obligatorio',
            'direccion.required' => 'La direccion es obligatoria',
            'capacidad.required' => 'Este campo es obligatrio'
        ];

        $this->validate($request, $rules, $messages);

        $unidad = new UnidadEducativa;
        $unidad->nombre = $request->nombre;
        $unidad->distrito = $request->distrito;
        $unidad->direccion = $request->direccion;
        $unidad->capacidad = $request->capacidad;
        $unidad->save();
        return redirect()->route('unidad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnidadEducativa  $unidadEducativa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unidadEducativa = UnidadEducativa::find($id);
        return view('unidadeducativa.show', compact('unidadEducativa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnidadEducativa  $unidadEducativa
     * @return \Illuminate\Http\Response
     */
    public function edit(UnidadEducativa $unidadEducativa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnidadEducativa  $unidadEducativa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadEducativa $unidadEducativa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnidadEducativa  $unidadEducativa
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnidadEducativa $unidadEducativa)
    {
        //
    }
}
