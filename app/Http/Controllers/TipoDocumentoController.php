<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumento;

class TipoDocumentoController extends Controller
{

    public function index()
    {
        $tipodocumentos = TipoDocumento :: orderBy('nombre','asc')->get();
        return view('tipodocumentos.index')->with('tipodocumentos', $tipodocumentos);
    }

    public function show(TipoDocumento $tipodocumento)
    {
        
     return view('tipodocumentos.show',['tipodocumento'=>$tipodocumento]);
    }

    public function create()
    {
       return view('tipodocumentos.create');
    }

    public function store(Request $request)
    {
        $url = request()->url;
        $tipodocumento = new TipoDocumento;
        $tipodocumento->nombre=strtoupper($request->input('nombre'));
        $tipodocumento->habilitado=true;
        $tipodocumento->save();
        //TipoDocumento::create($request->all());
        return redirect($url);
    }

    public function edit(TipoDocumento $tipodocumento){
        return view('tipodocumentos.edit')->with('tipodocumento',$tipodocumento);
    }

    public function update(TipoDocumento $tipodocumento)
    {
        $url = request()->url;
       $tipodocumento->nombre=strtoupper(request()->nombre);
       $tipodocumento->save();
       return redirect($url);
    }

    public function destroy(TipoDocumento $tipodocumento)
    {
        $tipodocumento->delete();

        return redirect('tipodocumentos');
    }
}
