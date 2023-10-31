<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sexo;

class SexoController extends Controller
{

    public function index()
    {
        $sexos = Sexo :: orderBy('nombre','asc')->get();
        return view('sexos.index')->with('sexos', $sexos);
    }

    public function show(Sexo $sexo)
    {
        
     return view('sexos.show',['sexo'=>$sexo]);
    }

    public function create()
    {
       return view('sexos.create');
    }

    public function store(Request $request)
    {
        $url=$request->input('url');
        $sexo = new Sexo;
        $sexo->nombre = strtoupper($request->nombre);
        $sexo->habilitado = true;
        $sexo->save();
        //dd($request->all());
        return redirect($url);
    }

    public function edit(Sexo $sexo){
        return view('sexos.edit')->with('sexo',$sexo);
    }

    public function update(Sexo $sexo)
    {
       $sexo->nombre=strtoupper(request()->nombre);
       $sexo->save();
       return redirect('sexos');
    }

    public function destroy(Sexo $sexo)
    {
        $sexo->delete();

        return redirect('sexos');
    }
}
