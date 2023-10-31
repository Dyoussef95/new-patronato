<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parentezco;

class ParentezcoController extends Controller
{

    public function index()
    {
        $parentezcos = Parentezco :: orderBy('nombre','asc')->get();
        return view('parentezcos.index')->with('parentezcos', $parentezcos);
    }

    public function show(Parentezco $parentezco)
    {
        
     return view('parentezcos.show',['parentezco'=>$parentezco]);
    }

    public function create()
    {
       return view('parentezcos.create');
    }

    public function store(Request $request)
    {
        $parentezco = new Parentezco;
        $parentezco->nombre=strtoupper($request->input('nombre'));
        $parentezco->habilitado=true;
        $parentezco->save();
        //Parentezco::create($request->all());
        return redirect('parentezcos');
    }

    public function edit(Parentezco $parentezco){
        return view('parentezcos.edit')->with('parentezco',$parentezco);
    }

    public function update(Parentezco $parentezco)
    {
       $parentezco->nombre=strtoupper(request()->nombre);
       $parentezco->save();
       return redirect('parentezcos');
    }

    public function destroy(Parentezco $parentezco)
    {
        $parentezco->delete();

        return redirect('parentezcos');
    }
}
