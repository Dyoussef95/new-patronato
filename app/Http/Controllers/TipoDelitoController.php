<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDelito;

class TipoDelitoController extends Controller
{

    public function index()
    {
        $tipodelitos = TipoDelito :: orderBy('nombre','asc')->get();
        return view('tipodelitos.index')->with('tipodelitos', $tipodelitos);
    }

    public function show(TipoDelito $tipodelito)
    {
        
     return view('tipodelitos.show',['tipodelito'=>$tipodelito]);
    }

    public function create()
    {
       return view('tipodelitos.create');
    }

    public function store(Request $request)
    {
        $tipodelito = new TipoDelito;
        $tipodelito->nombre=strtoupper($request->nombre);
        $tipodelito->habilitado=true;
        $tipodelito->save();
        //TipoDelito::create($request->all());
        return redirect('tipodelitos');
    }

    public function edit(TipoDelito $tipodelito){
        return view('tipodelitos.edit')->with('tipodelito',$tipodelito);
    }

    public function update(TipoDelito $tipodelito)
    {
       $tipodelito->nombre=strtoupper(request()->nombre);
       $tipodelito->save();
       return redirect('tipodelitos');
    }

    public function destroy(TipoDelito $tipodelito)
    {
        $tipodelito->delete();

        return redirect('tipodelitos');
    }
}
