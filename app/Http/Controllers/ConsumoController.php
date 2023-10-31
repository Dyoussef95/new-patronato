<?php

namespace App\Http\Controllers;

use App\Consumo;
use Illuminate\Http\Request;

class ConsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumos = Consumo :: orderBy('objeto_consumo','asc')->get();
        return view('consumos.index')->with('consumos', $consumos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consumo = new Consumo;
        $url=$request->input('url');
        $consumo->objeto_consumo=strtoupper($request->objeto_consumo);
        $consumo->save();

        
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function show(Consumo $consumo)
    {
        return view('consumos.show',['consumo'=>$consumo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumo $consumo)
    {
        return view('consumos.edit')->with('consumo',$consumo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumo $consumo)
    {
        $consumo->objeto_consumo=strtoupper($request->objeto_consumo);
        $consumo->save();
        return redirect('consumos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumo $consumo)
    {
        $consumo->delete();
        return redirect('consumos');
    }
}
