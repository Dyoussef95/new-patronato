<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SituacionSaludEnfermedad;
use App\SituacionSalud;
use App\CentroSalud;
use App\Enfermedad;

class SituacionSaludEnfermedadController extends Controller
{

    public function index()
    {
        $situacionsaludenfermedads = SituacionSaludEnfermedad :: get();
        //dd($situacionsaludenfermedads);
        return view('situacionsaludenfermedads.index', compact('situacionsaludenfermedads'));
    }

    public function show(SituacionSaludEnfermedad $situacionsaludenfermedad)
    {
     return view('situacionsaludenfermedads.show',['situacionsaludenfermedad'=>$situacionsaludenfermedad]);
    }

    public function create(SituacionSalud $situacionsalud)
    {
        $centrosaluds = CentroSalud::all();
        $enfermedads = Enfermedad::all();

       return view('situacionsaludenfermedads.create', compact('centrosaluds','enfermedads'))->with('situacionsalud', $situacionsalud);
    }

    public function store(Request $request)
    {
        $url=$request->input('url');
        $request->validate([
            'enfermedad_id' => ['required'],
        ]);
        SituacionSaludEnfermedad::create($request->all());
        return redirect($url);
    }

    public function edit(SituacionSaludEnfermedad $situacionsaludenfermedad){
        
    

        $situacionsaluds = SituacionSalud::all();
        $centrosaluds = CentroSalud::all();
        $enfermedads = Enfermedad::all();
        

       return view('situacionsaludenfermedads.edit', compact('situacionsaludenfermedad','situacionsaluds','centrosaluds','enfermedads'));
    }

    public function update(SituacionSaludEnfermedad $situacionsaludenfermedad)
    {
        $url=request()->url;
        $situacionsaludenfermedad->update(request()->all());
       return redirect($url);
    }

    public function destroy(SituacionSaludEnfermedad $situacionsaludenfermedad)
    {
        dd($situacionsaludenfermedad);
        $url="situacionsaluds/$situacionsaludenfermedad->situacion_salud_id/edit";
        $situacionsaludenfermedad->delete();

        return redirect($url);
    }
}
