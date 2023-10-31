<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SituacionLaboral;

class SituacionLaboralController extends Controller
{

    public function index()
    {
        $situacioneslaborales = SituacionLaboral :: orderBy('nombre','asc')->get();
        return view('situacioneslaborales.index')->with('situacioneslaborales', $situacioneslaborales);
    }

    public function show(SituacionLaboral $situacionlaboral)
    {
        
     return view('situacioneslaborales.show',['situacionlaboral'=>$situacionlaboral]);
    }

    public function create()
    {
       return view('situacioneslaborales.create');
    }

    public function store(Request $request)
    {
        $situacionlaboral = new SituacionLaboral;
        $situacionlaboral->nombre=strtoupper($request->input('nombre'));
        $situacionlaboral->habilitado=true;
        $situacionlaboral->save();
        //SituacionLaboral::create($request->all());
        return redirect('situacioneslaborales');
    }

    public function edit(SituacionLaboral $situacionlaboral){
        return view('situacioneslaborales.edit')->with('situacionlaboral',$situacionlaboral);
    }

    public function update(SituacionLaboral $situacionlaboral)
    {
       $situacionlaboral->nombre=strtoupper(request()->nombre);
       $situacionlaboral->save();
       return redirect('situacioneslaborales');
    }

    public function destroy(SituacionLaboral $situacionlaboral)
    {
        $situacionlaboral->delete();

        return redirect('situacioneslaborales');
    }
}
