<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoFinSupervision;

class MotivoFinSupervisionController extends Controller
{

    public function index()
    {
        $motivofinsupervisions = MotivoFinSupervision :: orderBy('nombre','asc')->get();
        return view('motivofinsupervisions.index')->with('motivofinsupervisions', $motivofinsupervisions);
    }

    public function show(MotivoFinSupervision $motivofinsupervision)
    {
     return view('motivofinsupervisions.show',['motivofinsupervision'=>$motivofinsupervision]);
    }

    public function create()
    {
       return view('motivofinsupervisions.create');
    }

    public function store(Request $request)
    {
        $url = $request->url;
        $motivofinsupervision = new MotivoFinSupervision;
        $motivofinsupervision->nombre=$request->nombre;
        $motivofinsupervision->save();
        //MotivoFinSupervision::create($request->all());
        return redirect($url);
    }

    public function edit(MotivoFinSupervision $motivofinsupervision){
        
        return view('motivofinsupervisions.edit')->with('motivofinsupervision',$motivofinsupervision);
    }

    public function update(MotivoFinSupervision $motivofinsupervision)
    {
        $url = request()->url;
       $motivofinsupervision->nombre=request()->nombre;
       $motivofinsupervision->save();
       return redirect($url);
    }

    public function destroy(MotivoFinSupervision $motivofinsupervision)
    {
        $url = request()->url;
        $motivofinsupervision->delete();

        return redirect($url);
    }
}
