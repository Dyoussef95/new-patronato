<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{

    public function index()
    {
        $departamentos = Departamento :: orderBy('nombre','asc')->get();
        return view('departamentos.index',compact('departamentos'));
    }

    public function show(Departamento $departamento)
    {
     return view('departamentos.show',compact('departamento'));
    }

    public function create()
    {
       return view('departamentos.create');
    }

    public function store(Request $request)
    { 
        $url = $request->url;
        $departamento = new Departamento;
        $departamento->nombre=strtoupper($request->nombre);
       
        $departamento->save();

        //Departamento::create($request->all());
        return redirect($url);
    }

    public function edit(Departamento $departamento){
        
        return view('departamentos.edit',compact('departamento'));
    }

    public function update(Request $request,Departamento $departamento)
    {
        $url=$request->url;
       $departamento->nombre=strtoupper($request->nombre);
       $departamento->save();
       return redirect($url);
    }

    public function destroy(Departamento $departamento)
    {
        $departamento->delete();

        return redirect('departamentos');
    }
}
