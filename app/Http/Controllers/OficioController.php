<?php

namespace App\Http\Controllers;

use App\Oficio;
use App\TipoOficio;
use App\Interno;
use App\Historia;
use App\JuzgadoEspecifico;

use Illuminate\Http\Request;

class OficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $oficiosAdministrativos = Oficio::where('tipo_oficio',1)->get();
        $oficiosTecnicos = Oficio::whereBetween('tipo_oficio',[2,3])->get();
        $internos = Interno::get();
        $historias = Historia::get();
        $juzgados = JuzgadoEspecifico::get();
        return view('oficios.index',compact('oficiosAdministrativos','oficiosTecnicos','juzgados','internos','historias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAdministrativo()
    {
        $juzgados = JuzgadoEspecifico::get();
        return view('oficios.administrativos.create')->with('juzgados',$juzgados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAdministrativo(Request $request)
    {
        $oficio = new Oficio;
        $oficio->numero = $request->numero;
        $oficio->fecha = $request->fecha;
        $oficio->descripcion = $request->descripcion;
        if($request->procedencia_id!=0){
            $oficio->procedencia_id = $request->procedencia_id;   
        }        
        $oficio->tipo_oficio = 1; //1 => administrativo, 2 => tecnico
        $oficio->save();
        return redirect($request->url);
    }

    public function storeTecnico(Request $request)
    {
        $oficio = new Oficio;
        $oficio->numero = $request->numero;
        $oficio->fecha = $request->fecha;
        $oficio->descripcion = $request->descripcion;
        if($request->procedencia_id!=0){
            $oficio->procedencia_id = $request->procedencia_id;   
        }        
        $oficio->tipo_oficio = 2; //1 => administrativo, 2 => tecnico, 3 => ingreso nuevo
        $oficio->save();

        return $oficio->id;
    }

    public function nuevoInterno(Request $request){
       
        $internoController = new InternoController;
        $interno = $internoController->store($request);        

        $historiaController = new HistoriaController;
        $historia = $historiaController->nuevoInterno($request,$interno);

        $oficio = new Oficio;
        $oficio->numero = $request->numero;
        $oficio->fecha = $request->fecha;
        $oficio->descripcion = $request->descripcion;
        if($request->procedencia_id!=0){
            $oficio->procedencia_id = $request->procedencia_id;   
        }        
        $oficio->tipo_oficio = 3; //1 => administrativo, 2 => tecnico, 3 => ingreso nuevo
        $oficio->historia_id = $historia->id;
        $oficio->save();

        return redirect('mesa-entrada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oficio  $oficio
     * @return \Illuminate\Http\Response
     */
    public function show(Oficio $oficio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oficio  $oficio
     * @return \Illuminate\Http\Response
     */
    public function edit(Oficio $oficio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oficio  $oficio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oficio $oficio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oficio  $oficio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oficio $oficio)
    {
        $oficio->delete();

        return redirect(request()->url);
    }
}
