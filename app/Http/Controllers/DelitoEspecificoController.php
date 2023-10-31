<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DelitoEspecifico;
use App\TipoDelito;

class DelitoEspecificoController extends Controller
{

    public function index()
    {
        $delitoespecificos = DelitoEspecifico :: orderBy('nombre','asc')->get();
        return view('delitoespecificos.index', compact('delitoespecificos'));
    }

    public function show(DelitoEspecifico $delitoespecifico)
    {
     return view('delitoespecificos.show',['delitoespecifico'=>$delitoespecifico]);
    }

    public function create()
    {
        $tipodelitos = TipoDelito::all();
       return view('delitoespecificos.create')->with('tipodelitos', $tipodelitos);
    }

    public function store(Request $request)
    {
        /*$delitoespecifico = new DelitoEspecifico;
        $delitoespecifico->nombre=$request->input('nombre');
        $delitoespecifico->juzgadoTipo_id=$request->input('juzgadoTipo_id');
        $delitoespecifico->habilitado=true;
        $delitoespecifico->save();*/
        //dd(request()->all());
        DelitoEspecifico::create(request()->all());
        return redirect('delitoespecificos');
    }

    public function edit(DelitoEspecifico $delitoespecifico){
        
        $tipodelitos = TipoDelito::all();
        return view('delitoespecificos.edit',compact('delitoespecifico','tipodelitos'));
    }

    public function update(DelitoEspecifico $delitoespecifico)
    {
       $delitoespecifico->update(request()->all());
       return redirect('delitoespecificos');
    }

    public function destroy(DelitoEspecifico $delitoespecifico)
    {
        $delitoespecifico->delete();

        return redirect('delitoespecificos');
    }
}
