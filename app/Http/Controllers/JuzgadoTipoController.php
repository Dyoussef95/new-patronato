<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JuzgadoTipo;

class JuzgadoTipoController extends Controller
{

    public function index()
    {
        $juzgadostipos = JuzgadoTipo :: orderBy('nombre','asc')->get();
        return view('juzgadostipos.index')->with('juzgadostipos', $juzgadostipos);
    }

    public function show(JuzgadoTipo $juzgadotipo)
    {
     return view('juzgadostipos.show',['juzgadotipo'=>$juzgadotipo]);
    }

    public function create()
    {
       return view('juzgadostipos.create');
    }

    public function store(Request $request)
    {
        $juzgadotipo = new JuzgadoTipo;
        $juzgadotipo->nombre=strtoupper($request->input('nombre'));
        $juzgadotipo->habilitado=true;
        $juzgadotipo->save();
        //JuzgadoTipo::create($request->all());
        return redirect('juzgadostipos');
    }

    public function edit(JuzgadoTipo $juzgadotipo){
        
        return view('juzgadostipos.edit')->with('juzgadotipo',$juzgadotipo);
    }

    public function update(JuzgadoTipo $juzgadotipo)
    {
        
       $juzgadotipo->nombre=strtoupper(request()->nombre);
       $juzgadotipo->save();
       return redirect('juzgadostipos');
    }

    public function destroy(JuzgadoTipo $juzgadotipo)
    {
        $juzgadotipo->delete();

        return redirect('juzgadostipos');
    }
}
