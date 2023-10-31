<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SituacionProcesal;

class SituacionProcesalController extends Controller
{

    public function index()
    {
        $situacionesprocesales = SituacionProcesal :: orderBy('nombre','asc')->get();
        return view('situacionesprocesales.index')->with('situacionesprocesales', $situacionesprocesales);
    }

    public function show(SituacionProcesal $situacionprocesal)
    {
        
     return view('situacionesprocesales.show',['situacionprocesal'=>$situacionprocesal]);
    }

    public function create()
    {
       return view('situacionesprocesales.create');
    }

    public function store(Request $request)
    {
        $situacionprocesal = new SituacionProcesal;
        $situacionprocesal->nombre=$request->input('nombre');
        $situacionprocesal->habilitado=true;
        $situacionprocesal->save();
        //SituacionProcesal::create($request->all());
        return redirect('situacionesprocesales');
    }

    public function edit(SituacionProcesal $situacionprocesal){
        return view('situacionesprocesales.edit')->with('situacionprocesal',$situacionprocesal);
    }

    public function update(SituacionProcesal $situacionprocesal)
    {
       $situacionprocesal->nombre=request()->nombre;
       $situacionprocesal->save();
       return redirect('situacionesprocesales');
    }

    public function destroy(SituacionProcesal $situacionprocesal)
    {
        $situacionprocesal->delete();

        return redirect('situacionesprocesales');
    }
}
