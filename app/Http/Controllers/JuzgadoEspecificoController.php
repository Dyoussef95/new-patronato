<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JuzgadoEspecifico;
use App\JuzgadoTipo;

class JuzgadoEspecificoController extends Controller
{

    public function index()
    {
        $juzgadosespecificos = JuzgadoEspecifico :: orderBy('nombre','asc')->get();
        return view('juzgadosespecificos.index', compact('juzgadosespecificos'));
    }

    public function show(JuzgadoEspecifico $juzgadoespecifico)
    {
     return view('juzgadosespecificos.show',['juzgadoespecifico'=>$juzgadoespecifico]);
    }

    public function create()
    {
        $juzgadostipos = JuzgadoTipo::all();
       return view('juzgadosespecificos.create')->with('juzgadostipos', $juzgadostipos);
    }

    public function store(Request $request)
    {
        $juzgadoespecifico = new JuzgadoEspecifico;
        $juzgadoespecifico->nombre=strtoupper($request->input('nombre'));
        $juzgadoespecifico->juzgadoTipo_id=$request->input('juzgadoTipo_id');
        $juzgadoespecifico->habilitado=true;
        $juzgadoespecifico->save();
        //JuzgadoEspecifico::create($request->all());
        return redirect('juzgadosespecificos');
    }

    public function edit(JuzgadoEspecifico $juzgadoespecifico){
        
        $juzgadostipos = JuzgadoTipo::all();
        return view('juzgadosespecificos.edit',compact('juzgadoespecifico','juzgadostipos'));
    }

    public function update(JuzgadoEspecifico $juzgadoespecifico)
    {
        $juzgadoespecifico->nombre=strtoupper(request()->input('nombre'));
        $juzgadoespecifico->juzgadoTipo_id=request()->input('juzgadoTipo_id');
        $juzgadoespecifico->save();
       return redirect('juzgadosespecificos');
    }

    public function destroy(JuzgadoEspecifico $juzgadoespecifico)
    {
        $juzgadoespecifico->delete();

        return redirect('juzgadosespecificos');
    }
}
