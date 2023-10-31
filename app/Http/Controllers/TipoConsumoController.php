<?php

namespace App\Http\Controllers;

use App\TipoConsumo;
use Illuminate\Http\Request;

class TipoConsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoconsumoes = TipoConsumo :: orderBy('nombre','asc')->get();
        return view('tipoconsumos.index')->with('tipoconsumoes', $tipoconsumoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoconsumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoconsumo = new TipoConsumo;
        $url=$request->input('url');
        $tipoconsumo->nombre=strtoupper($request->nombre);
        $tipoconsumo->save();

        
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoConsumo  $tipoconsumo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoConsumo $tipoconsumo)
    {
        return view('tipoconsumos.show',['tipoconsumo'=>$tipoconsumo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoConsumo  $tipoconsumo
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoConsumo $tipoconsumo)
    {
        return view('tipoconsumos.edit')->with('tipoconsumo',$tipoconsumo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoConsumo  $tipoconsumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoConsumo $tipoconsumo)
    {
        $tipoconsumo->nombre=strtoupper($request->nombre);
        $tipoconsumo->save();
        return redirect('tipoconsumos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoConsumo  $tipoconsumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoConsumo $tipoconsumo)
    {
        $tipoconsumo->delete();
        return redirect('tipoconsumos');
    }
}
