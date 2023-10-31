<?php

namespace App\Http\Controllers;

use App\LugarTratamientoConsumo;
use Illuminate\Http\Request;

class LugarTratamientoConsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugartratamientoconsumos = LugarTratamientoConsumo :: orderBy('nombre','asc')->get();
        return view('lugartratamientoconsumos.index')->with('lugartratamientoconsumos', $lugartratamientoconsumos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugartratamientoconsumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lugartratamientoconsumo = new LugarTratamientoConsumo;
        $url=$request->input('url');
        $lugartratamientoconsumo->nombre=strtoupper($request->nombre);
        $lugartratamientoconsumo->direccion=strtoupper($request->direccion);
        $lugartratamientoconsumo->save();
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LugarTratamientoConsumo  $lugartratamientoconsumo
     * @return \Illuminate\Http\Response
     */
    public function show(LugarTratamientoConsumo $lugartratamientoconsumo)
    {
        return view('lugartratamientoconsumos.show',['lugartratamientoconsumo'=>$lugartratamientoconsumo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LugarTratamientoConsumo  $lugartratamientoconsumo
     * @return \Illuminate\Http\Response
     */
    public function edit(LugarTratamientoConsumo $lugartratamientoconsumo)
    {
        return view('lugartratamientoconsumos.edit')->with('lugartratamientoconsumo',$lugartratamientoconsumo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LugarTratamientoConsumo  $lugartratamientoconsumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LugarTratamientoConsumo $lugartratamientoconsumo)
    {
        $lugartratamientoconsumo->nombre=strtoupper($request->nombre);
        $lugartratamientoconsumo->direccion=strtoupper($request->direccion);
        $lugartratamientoconsumo->save();
        return redirect('lugartratamientoconsumos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LugarTratamientoConsumo  $lugartratamientoconsumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(LugarTratamientoConsumo $lugartratamientoconsumo)
    {
        $lugartratamientoconsumo->delete();
        return redirect('lugartratamientoconsumos');
    }
}
