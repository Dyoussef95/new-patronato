<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoTratamientoConsumo;

class TipoTratamientoConsumoController extends Controller
{

    public function index()
    {
        $tipostratamientosconsumos = TipoTratamientoConsumo :: orderBy('nombre','asc')->get();
        return view('tipostratamientosconsumos.index',compact('tipostratamientosconsumos'));
    }

    public function show(TipoTratamientoConsumo $tipotratamientoconsumos)
    {
     return view('tipostratamientosconsumos.show',['tipotratamientoconsumos'=>$tipotratamientoconsumos]);
    }

    public function create()
    {
       return view('tipostratamientosconsumos.create');
    }

    public function store(Request $request)
    {
        $url = $request->url;
        $tipotratamientoconsumos = new TipoTratamientoConsumo;
        $tipotratamientoconsumos->nombre=strtoupper($request->nombre);
        $tipotratamientoconsumos->save();
        return redirect($url);
    }

    public function edit(TipoTratamientoConsumo $tipotratamientoconsumos){
        
        return view('tipostratamientosconsumos.edit',compact('tipotratamientoconsumos'));
    }

    public function update(Request $request, TipoTratamientoConsumo $tipotratamientoconsumos)
    {
        $url = $request->url;
       $tipotratamientoconsumos->nombre=strtoupper($request->nombre);
       $tipotratamientoconsumos->save();
       return redirect($url);
    }

    public function destroy(TipoTratamientoConsumo $tipotratamientoconsumos)
    {
        $tipotratamientoconsumos->delete();

        return redirect('tipostratamientosconsumos');
    }
}



