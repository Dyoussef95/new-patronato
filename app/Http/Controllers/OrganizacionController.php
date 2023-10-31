<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;

class OrganizacionController extends Controller
{

    public function index()
    {
        $organizaciones = Organizacion :: orderBy('nombre','asc')->get();
        return view('organizaciones.index')->with('organizaciones', $organizaciones);
    }

    public function show(Organizacion $organizacion)
    {
        
     return view('organizaciones.show',['organizacion'=>$organizacion]);
    }

    public function create()
    {
       return view('organizaciones.create');
    }

    public function store(Request $request)
    {
        $organizacion = new Organizacion;
        $organizacion->nombre=$request->input('nombre');
        $organizacion->habilitado=true;
        $organizacion->save();
        //Organizacion::create($request->all());
        return redirect('organizaciones');
    }

    public function edit(Organizacion $organizacion){
        return view('organizaciones.edit')->with('organizacion',$organizacion);
    }

    public function update(Organizacion $organizacion)
    {
       $organizacion->nombre=request()->nombre;
       $organizacion->save();
       return redirect('organizaciones');
    }

    public function destroy(Organizacion $organizacion)
    {
        $organizacion->delete();

        return redirect('organizaciones');
    }
}
