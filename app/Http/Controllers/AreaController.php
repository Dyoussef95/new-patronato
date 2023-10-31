<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{

    public function index()
    {
        
        $areas = Area :: orderBy('nombre','asc')->get();
        return view('areas.index')->with('areas', $areas);
    }

    public function show(Area $area)
    {
     return view('areas.show',['area'=>$area]);
    }

    public function create()
    {
       return view('areas.create');
    }

    public function store(Request $request)
    {
        $area = new Area;
        $area->nombre=strtoupper($request->input('nombre'));
        $area->habilitado=true;
        $area->save();
        //Area::create($request->all());
        return redirect('areas');
    }

    public function edit(Area $area){
        
        return view('areas.edit')->with('area',$area);
    }

    public function update(Area $area)
    {
       $area->nombre=strtoupper(request()->nombre);
       $area->save();
       return redirect('areas');
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return redirect('areas');
    }
}
