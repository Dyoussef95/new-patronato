<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FrecuenciaControl;

class FrecuenciaControlController extends Controller
{

    public function index()
    {
        $frecuenciascontroles = FrecuenciaControl :: orderBy('nombre','asc')->get();
        return view('frecuenciascontroles.index',compact('frecuenciascontroles'));
    }

    public function show(FrecuenciaControl $frecuenciacontrol)
    {
     return view('frecuenciascontroles.show',compact('frecuenciacontrol'));
    }

    public function create()
    {
       return view('frecuenciascontroles.create');
    }

    public function store(Request $request)
    {
        $url = $request->url;
        $frecuenciacontrol = new FrecuenciaControl;
        $frecuenciacontrol->nombre=strtoupper($request->nombre);
        $frecuenciacontrol->save();
        return redirect($url);
    }

    public function edit(FrecuenciaControl $frecuenciacontrol){
        
        return view('frecuenciascontroles.edit',compact('frecuenciacontrol'));
    }

    public function update(Request $request, FrecuenciaControl $frecuenciacontrol)
    {
        $url = $request->url;
       $frecuenciacontrol->nombre=strtoupper($request->nombre);
       $frecuenciacontrol->save();
       return redirect($url);
    }

    public function destroy(FrecuenciaControl $frecuenciacontrol)
    {
        $frecuenciacontrol->delete();

        return redirect('frecuenciascontroles');
    }
}
