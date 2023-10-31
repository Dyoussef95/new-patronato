<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tobillera;
use App\Historia;

class TobilleraController extends Controller
{

    public function index()
    {
        $tobilleras = Tobillera :: get();
        return view('tobilleras.index', compact('tobilleras'));
    }

    public function show(Tobillera $tobillera)
    {
     return view('tobilleras.show',['tobillera'=>$tobillera]);
    }

    public function create()
    {
        $historias = Historia::all();
        return view('tobilleras.create',compact('historias'));
    }

    public function store(Request $request)
    {
        //dd(request()->all());
        $url=request()->url;
        Tobillera::create(request()->all());
        return redirect($url);
    }

    public function edit(Tobillera $tobillera){
        
        $historias = Historia::all();
        return view('tobilleras.edit',compact('tobillera','historias'));
    }

    public function update(Tobillera $tobillera)
    {
        $url=request()->url;
       $tobillera->update(request()->all());
       return redirect($url);
    }

    public function destroy(Tobillera $tobillera)
    {
        $tobillera->delete();

        return redirect('tobilleras');
    }
}
