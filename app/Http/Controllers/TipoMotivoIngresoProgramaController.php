<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoMotivoIngresoPrograma;

class TipoMotivoIngresoProgramaController extends Controller
{

    public function index() 
    {
        $tipomotivoingresoprogramas = TipoMotivoIngresoPrograma :: orderBy('nombre','asc')->get();
        return view('tipomotivoingresoprogramas.index')->with('tipomotivoingresoprogramas', $tipomotivoingresoprogramas);
    }

    public function show(TipoMotivoIngresoPrograma $tipomotivoingresoprograma)
    {
        
     return view('tipomotivoingresoprogramas.show',['tipomotivoingresoprograma'=>$tipomotivoingresoprograma]);
    }

    public function create()
    {
       return view('tipomotivoingresoprogramas.create');
    }

    public function store(Request $request)
    {
        $url = request()->url;
        $tipomotivoingresoprograma = new TipoMotivoIngresoPrograma;
        $tipomotivoingresoprograma->nombre=strtoupper($request->input('nombre'));
        $tipomotivoingresoprograma->habilitado=true;
        $tipomotivoingresoprograma->save();
        //TipoMotivoIngresoPrograma::create($request->all());
        return redirect($url);
    }

    public function edit(TipoMotivoIngresoPrograma $tipomotivoingresoprograma){
        return view('tipomotivoingresoprogramas.edit')->with('tipomotivoingresoprograma',$tipomotivoingresoprograma);
    }

    public function update(TipoMotivoIngresoPrograma $tipomotivoingresoprograma)
    {
        $url = request()->url;
       $tipomotivoingresoprograma->nombre=strtoupper(request()->nombre);
       $tipomotivoingresoprograma->save();
       return redirect($url);
    }

    public function destroy(TipoMotivoIngresoPrograma $tipomotivoingresoprograma)
    {
        $tipomotivoingresoprograma->delete();

        return redirect('tipomotivoingresoprogramas');
    }
}
