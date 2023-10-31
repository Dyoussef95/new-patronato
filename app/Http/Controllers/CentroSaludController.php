<?php

namespace App\Http\Controllers;

use App\CentroSalud;
use Illuminate\Http\Request;

class CentroSaludController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centrosaluds = CentroSalud :: orderBy('nombre','asc')->get();
        return view('centrosaluds.index')->with('centrosaluds', $centrosaluds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centrosaluds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $centrosalud = new CentroSalud;
        $url=$request->input('url');
        $centrosalud->nombre=strtoupper($request->nombre);
        $centrosalud->direccion=strtoupper($request->direccion);
        $centrosalud->save();
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CentroSalud  $centrosalud
     * @return \Illuminate\Http\Response
     */
    public function show(CentroSalud $centrosalud)
    {
        return view('centrosaluds.show',['centrosalud'=>$centrosalud]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CentroSalud  $centrosalud
     * @return \Illuminate\Http\Response
     */
    public function edit(CentroSalud $centrosalud)
    {
        return view('centrosaluds.edit')->with('centrosalud',$centrosalud);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CentroSalud  $centrosalud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CentroSalud $centrosalud)
    {
        $centrosalud->nombre=strtoupper($request->nombre);
        $centrosalud->direccion=strtoupper($request->direccion);
        $centrosalud->save();
        return redirect('centrosaluds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CentroSalud  $centrosalud
     * @return \Illuminate\Http\Response
     */
    public function destroy(CentroSalud $centrosalud)
    {
        $centrosalud->delete();
        return redirect('centrosaluds');
    }
}
