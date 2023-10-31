<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localidad;
use App\Departamento;

class LocalidadController extends Controller
{

    public function index()
    {
        $localidades = Localidad :: orderBy('nombre','asc')->get();
        return view('localidades.index', compact('localidades'));
    }

    public function show(Localidad $localidad)
    {
     return view('localidades.show',['localidad'=>$localidad]);
    }

    public function create()
    {
        $departamentos = Departamento::all();
       return view('localidades.create')->with('departamentos', $departamentos);
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required',
        'codigo_postal'=>'required',
        'departamento_id'=> 'required',
        'habilitado' => 'required',
        ]);
        /*$localidad = new Localidad;
        $localidad->nombre=$request->input('nombre');
        $localidad->juzgadoTipo_id=$request->input('juzgadoTipo_id');
        $localidad->habilitado=true;
        $localidad->save();*/
        //dd(request()->all());
        Localidad::create(request()->all());
        return redirect('localidades');
    }

    public function edit(Localidad $localidad){
        
        $departamentos = Departamento::all();
        return view('localidades.edit',compact('localidad','departamentos'));
    }

    public function update(Localidad $localidad)
    {
       $localidad->update(request()->all());
       return redirect('localidades');
    }

    public function destroy(Localidad $localidad)
    {
        $localidad->delete();

        return redirect('localidades');
    }
}
