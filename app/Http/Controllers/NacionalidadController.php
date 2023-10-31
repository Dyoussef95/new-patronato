<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nacionalidad;

class NacionalidadController extends Controller
{

    public function index()
    {
        $nacionalidades = Nacionalidad :: orderBy('nombre','asc')->get();
        return view('nacionalidades.index',compact('nacionalidades'));
    }

    public function show(Nacionalidad $nacionalidad)
    {
     return view('nacionalidades.show',['nacionalidad'=>$nacionalidad]);
    }

    public function create()
    {
       return view('nacionalidades.create');
    }

    public function store(Request $request)
    {
        $url = $request->url;
        $nacionalidad = new Nacionalidad;
        $nacionalidad->nombre=strtoupper($request->nombre);
        $nacionalidad->save();
        return redirect($url);
    }

    public function edit(Nacionalidad $nacionalidad){
        
        return view('nacionalidades.edit',compact('nacionalidad'));
    }

    public function update(Request $request, Nacionalidad $nacionalidad)
    {
        $url = $request->url;
       $nacionalidad->nombre=strtoupper($request->nombre);
       $nacionalidad->save();
       return redirect($url);
    }

    public function destroy(Nacionalidad $nacionalidad)
    {
        $nacionalidad->delete();

        return redirect('nacionalidades');
    }
}



