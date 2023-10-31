<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caps;

class CapsController extends Controller
{

    public function index()
    {
        $capses = Caps :: orderBy('nombre','asc')->get();
        return view('caps.index')->with('capses', $capses);
    }

    public function show(Caps $caps)
    {
     return view('caps.show',['caps'=>$caps]);
    }

    public function create()
    {
       return view('caps.create');
    }

    public function store(Request $request)
    {
        $caps = new Caps;
        $caps->nombre=$request->input('nombre');
        $caps->habilitado=true;
        $caps->save();
        //Caps::create($request->all());
        return redirect('caps');
    }

    public function edit(Caps $caps){
        
        return view('caps.edit')->with('caps',$caps);
    }

    public function update(Caps $caps)
    {
       $caps->nombre=request()->nombre;
       $caps->save();
       return redirect('caps');
    }

    public function destroy(Caps $caps)
    {
        $caps->delete();

        return redirect('caps');
    }
}
