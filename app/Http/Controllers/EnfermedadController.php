<?php

namespace App\Http\Controllers;

use App\Enfermedad;
use Illuminate\Http\Request;

class EnfermedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermedades = Enfermedad :: orderBy('nombre','asc')->get();
        return view('enfermedads.index')->with('enfermedades', $enfermedades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enfermedads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enfermedad = new Enfermedad;
        $url=$request->input('url');
        $enfermedad->nombre=strtoupper($request->nombre);
        $enfermedad->save();

        
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function show(Enfermedad $enfermedad)
    {
        return view('enfermedads.show',['enfermedad'=>$enfermedad]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function edit(Enfermedad $enfermedad)
    {
        return view('enfermedads.edit')->with('enfermedad',$enfermedad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enfermedad $enfermedad)
    {
        $enfermedad->nombre=strtoupper($request->nombre);
        $enfermedad->save();
        return redirect('enfermedads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enfermedad  $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enfermedad $enfermedad)
    {
        $enfermedad->delete();
        return redirect('enfermedads');
    }
}
