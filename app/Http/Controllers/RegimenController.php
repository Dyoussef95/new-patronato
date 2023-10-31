<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regimen;
use App\Area;

class RegimenController extends Controller
{

    public function index()
    {
        $regimenes = Regimen :: orderBy('nombre','asc')->get();
        return view('regimenes.index', compact('regimenes'));
    }

    public function show(Regimen $regimen)
    {
     return view('regimenes.show',['regimen'=>$regimen]);
    }

    public function create()
    {
        $areas = Area::all();
        return view('regimenes.create',compact('areas'));
    }

    public function store(Request $request)
    {
        
        $regimen = new Regimen;
        $regimen->nombre=strtoupper($request->nombre);
        $regimen->area_id=$request->area_id;
        $regimen->habilitado=true;
        $regimen->save();

        return redirect('regimen');
    }

    public function edit(Regimen $regiman){
        
        $areas = Area::all();
        return view('regimenes.edit',compact('regiman','areas'));
    }

    public function update(Regimen $regiman)
    {
       $regiman->update(request()->all());
       return redirect('regimen');
    }

    public function destroy(Regimen $regiman)
    {
        $regiman->delete();

        return redirect('regimen');
    }
}
