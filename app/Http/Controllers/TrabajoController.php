<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajo;

class TrabajoController extends Controller
{

    public function index()
    {
        $trabajos = Trabajo :: orderBy('nombre','asc')->get();
        return view('trabajos.index')->with('trabajos', $trabajos);
    }

    public function show(Trabajo $trabajo)
    {
     return view('trabajos.show',['trabajo'=>$trabajo]);
    }

    public function create()
    {
       return view('trabajos.create');
    }

    public function store(Request $request)
    {
        $url=$request->url;
        $trabajo = new Trabajo;
        $trabajo->nombre=strtoupper($request->input('nombre'));
        $trabajo->habilitado=true;
        $trabajo->save();
        //Trabajo::create($request->all());
        return redirect($url);
    }

    public function edit(Trabajo $trabajo){
        return view('trabajos.edit')->with('trabajo',$trabajo);
    }

    public function update(Trabajo $trabajo)
    {
        $url=request()->url;
       $trabajo->nombre=strtoupper(request()->nombre);
       $trabajo->save();
       return redirect($url);
    }

    public function destroy(Trabajo $trabajo)
    {
        $trabajo->delete();

        return redirect('trabajos');
    }
}
