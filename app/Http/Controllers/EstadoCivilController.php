<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstadoCivil;

class EstadoCivilController extends Controller
{

    public function index()
    {
        $estadosciviles = EstadoCivil :: orderBy('nombre','asc')->get();
        return view('estadosciviles.index')->with('estadosciviles', $estadosciviles);
    }

    public function show(EstadoCivil $estadocivil)
    {
     return view('estadosciviles.show',['estadocivil'=>$estadocivil]);
    }

    public function create()
    {
       return view('estadosciviles.create');
    }

    public function store(Request $request)
    {
        $estadocivil = new EstadoCivil;
        $estadocivil->nombre=strtoupper($request->nombre);
        $estadocivil->habilitado=true;
        $estadocivil->save();
        //EstadoCivil::create($request->all());
        return redirect('estadosciviles');
    }

    public function edit(EstadoCivil $estadocivil){
        
        return view('estadosciviles.edit')->with('estadocivil',$estadocivil);
    }

    public function update(EstadoCivil $estadocivil)
    {
       $estadocivil->nombre=strtoupper(request()->nombre);
       $estadocivil->save();
       return redirect('estadosciviles');
    }

    public function destroy(EstadoCivil $estadocivil)
    {
        $estadocivil->delete();

        return redirect('estadosciviles');
    }
}
