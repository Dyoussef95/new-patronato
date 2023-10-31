<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelEstudio;

class NivelEstudioController extends Controller
{

    public function index()
    {
        $nivelestudios = NivelEstudio :: orderBy('nombre','asc')->get();
        return view('nivelestudio.index',compact('nivelestudios'));
    }

    public function show(NivelEstudio $nivelestudio)
    {
     return view('nivelestudio.show',['nivelestudio'=>$nivelestudio]);
    }

    public function create()
    {
       return view('nivelestudio.create');
    }

    public function store(Request $request)
    {
        $nivelestudio = new NivelEstudio;
        $nivelestudio->nombre=strtoupper($request->input('nombre'));
        $nivelestudio->habilitado=true;
        $nivelestudio->save();
        //NivelEstudio::create($request->all());
        return redirect('nivelestudio');
    }

    public function edit(NivelEstudio $nivelestudio){
        
        return view('nivelestudio.edit',compact('nivelestudio'));
    }

    public function update(NivelEstudio $nivelestudio)
    {
       $nivelestudio->nombre=strtoupper(request()->nombre);
       $nivelestudio->save();
       return redirect('nivelestudio');
    }

    public function destroy(NivelEstudio $nivelestudio)
    {
        $nivelestudio->delete();

        return redirect('nivelestudio');
    }
}
