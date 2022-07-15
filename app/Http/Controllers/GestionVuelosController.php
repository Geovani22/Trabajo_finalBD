<?php

namespace App\Http\Controllers;

use App\Models\gestion_vuelos;
use Illuminate\Http\Request;

class GestionVuelosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['vuelos']=gestion_vuelos::paginate(8);
        return view('vuelos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vuelos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosVuelo = request()->except('_token');
        gestion_vuelos::insert($datosVuelo);
        //return response()->json($datosVuelo);
        return redirect('vuelos')->with('mensaje', 'Vuelo agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gestion_vuelos  $gestion_vuelos
     * @return \Illuminate\Http\Response
     */
    public function show(gestion_vuelos $gestion_vuelos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gestion_vuelos  $gestion_vuelos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $gestion_vuelos=gestion_vuelos::findOrFail($id);
        return view('vuelos.edit', compact('gestion_vuelos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gestion_vuelos  $gestion_vuelos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosVuelo = request()->except(['_token','_method']);
        gestion_vuelos::where('id','=',$id)->update($datosVuelo);

        //$datos['vuelos']=gestion_vuelos::paginate(8);
        //return view('vuelos.index', $datos);
        return redirect('vuelos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gestion_vuelos  $gestion_vuelos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        gestion_vuelos::destroy($id);
        return redirect('vuelos')->with('mensaje', 'Vuelo borrado');
    }
}
