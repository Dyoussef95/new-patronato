<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SituacionSalud;
use App\Interno;
use App\SituacionSaludEnfermedad;
use App\CentroSalud;
use App\Enfermedad;
use App\Consumo;
use App\LugarTratamientoConsumo;
use App\TipoConsumo;
use App\TipoTratamientoConsumo;


class SituacionSaludController extends Controller
{

    public function index()
    {
        $situacionsaluds = SituacionSalud :: get();
        return view('situacionsaluds.index',compact('situacionsaluds'));
    }

    public function show(SituacionSalud $situacionsalud)
    {
     return view('situacionsaluds.show',['situacionsalud'=>$situacionsalud]);
    }

    public function create(Interno $interno)
    {
        $situacionsaludenfermedads = SituacionSaludEnfermedad::all();
       return view('situacionsaluds.create',compact('situacionsaludenfermedads'))
       ->with('interno', $interno);
    }

    public function store(Request $request)
    {
        $situacionsalud = new SituacionSalud;
        $url=$request->input('url');
        $situacionsalud->cobertura_medica=$request->cobertura_medica;
        $situacionsalud->interno_id=$request->interno_id;
        //dd($request->all());
        $situacionsalud->save();
        //SituacionSalud::create($request->all());
        return redirect($url);
    }

    public function nuevoInterno(Interno $interno)
    {
        $situacionSalud = new SituacionSalud;
        $situacionSalud->cobertura_medica=false;
        $situacionSalud->interno_id=$interno->id;
        $situacionSalud->save();
        return $situacionSalud;
    }

    public function edit(SituacionSalud $situacionsalud){
        
        $centrosSalud = CentroSalud::all();
        $internos = Interno::all();
        $centrosConsumo = LugarTratamientoConsumo::all();
        $tiposConsumo = TipoConsumo::all();
        $tiposTratamientosConsumo = TipoTratamientoConsumo::all(); 
        //obtengo las enfermedades asociadas a la situacion de salud actual
        $enfermedades = $situacionsalud->situaciones_salud_enfermedades;
         //obtengo las enfermedades asociadas a la situacion de salud actual
        $consumos = $situacionsalud->situaciones_salud_consumos;
        
    
        //dd($consumos->find(1)->pivot->lugar_tratamiento_consumo_id);
        return view('situacionsaluds.edit',
        compact('situacionsalud',
                'internos',
                'enfermedades',
                'centrosConsumo',
                'tiposConsumo',
                'tiposTratamientosConsumo',
                'consumos',
                'centrosSalud'));
    }

    public function update(Request $request, SituacionSalud $situacionsalud)
    {
        //dd($request);
        $situacionsalud->update(request()->all());
        return redirect(url("/internos/{$request->interno_id}"));
    }

    public function destroy(SituacionSalud $situacionsalud)
    {
        $situacionsalud->delete();

        return redirect('internos');
    }

    public function createEnfermedad(SituacionSalud $situacionSalud){
        $listaEnfermedades = Enfermedad::all();
        $centrosSalud = CentroSalud::all();

        return view('situacionsaluds.createEnfermedad',
        compact('listaEnfermedades','centrosSalud','situacionSalud'));
    }

    public function storeEnfermedad(Request $request, SituacionSalud $situacionSalud){
        
        if($request->tratamiento=="false"){
            $request->lugar_tratamiento_id=NULL;
        }
        $situacionSalud->situaciones_salud_enfermedades()->attach($request->enfermedad_id,
            ['tratamiento'=>$request->tratamiento,
            'lugar_tratamiento_id'=>$request->lugar_tratamiento_id,
            'habilitado'=>true]);
        
        return redirect($request->url);
    }

    public function editEnfermedad(SituacionSalud $situacionsalud, $enfermedad){
        
        $situacionSaludEnfermedad = $situacionsalud->situaciones_salud_enfermedades->find($enfermedad)->pivot;
        $listaEnfermedades = Enfermedad::all();
        $centrosSalud = CentroSalud::all();
        //dd($situacionSaludEnfermedad);
        return view('situacionsaluds.editEnfermedad',
        compact('situacionSaludEnfermedad','listaEnfermedades','centrosSalud'));
    }

    public function updateEnfermedad(Request $request, SituacionSalud $situacionsalud, Enfermedad $enfermedad){
        //dd($enfermedad);
        if($request->tratamiento=="false"){
            $lugarTratamientoId=NULL;
        }else{
            $lugarTratamientoId=$request->lugar_tratamiento_id;
        }
       

        $situacionsalud->situaciones_salud_enfermedades()
            ->updateExistingPivot($enfermedad->id,
                ['enfermedad_id'=>$enfermedad->id,
                'tratamiento'=>$request->tratamiento,
                'lugar_tratamiento_id'=>$lugarTratamientoId,
                'habilitado'=>true]);
        
        return redirect($request->url);
    }

    public function destroyEnfermedad(Request $request, SituacionSalud $situacionsalud, Enfermedad $enfermedad){
       //dd($enfermedad->id);
       $situacionsalud->situaciones_salud_enfermedades()->detach($enfermedad->id);

        return redirect($request->url);
        
    }

    public function createConsumo(SituacionSalud $situacionSalud){
        $listaConsumos = Consumo::all();
        $centrosConsumo = LugarTratamientoConsumo::all();
        $tiposTratamientosConsumo = TipoTratamientoConsumo::all();
        $tiposConsumo = TipoConsumo::all();
       //dd($listaConsumos);

        return view('situacionsaluds.createConsumo',
            compact('listaConsumos','centrosConsumo','tiposTratamientosConsumo',
                'tiposConsumo','situacionSalud'));
    }

    public function storeConsumo(Request $request, SituacionSalud $situacionSalud){
        
        
        if($request->tratamiento=="false"){
            $request->lugar_tratamiento_consumo_id=NULL;
            $request->tipo_tratamiento_consumos_id=NULL;
        }
    
        $situacionSalud->situaciones_salud_consumos()->attach($request->consumo_id,
            ['tipo_consumo_id'=>$request->tipo_consumo_id,
             'tratamiento'=>$request->tratamiento,
             'lugar_tratamiento_consumo_id'=>$request->lugar_tratamiento_consumo_id,
             'tipo_tratamiento_consumos_id'=>$request->tipo_tratamiento_consumos_id,
             'habilitado'=>true]);
        
        return redirect($request->url);
    }

    public function editConsumo(SituacionSalud $situacionsalud, $consumo){
        
        $situacionSaludConsumo = $situacionsalud->situaciones_salud_consumos
            ->find($consumo)->pivot;
        $listaConsumos = Consumo::all();
        $centrosConsumo = LugarTratamientoConsumo::all();
        $tiposConsumo = TipoConsumo::all();
        $tiposTratamientosConsumo = TipoTratamientoConsumo::all(); 
        //dd($situacionSaludConsumo);
        return view('situacionsaluds.editConsumo',
            compact('situacionSaludConsumo','listaConsumos',
                    'centrosConsumo','tiposConsumo','tiposTratamientosConsumo'));
    }

    public function updateConsumo(Request $request, SituacionSalud $situacionsalud, Consumo $consumo){
        //dd($enfermedad);
        if($request->tratamiento=="false"){
            $request->lugar_tratamiento_consumo_id=NULL;
            $request->tipo_tratamiento_consumos_id=NULL;
        }
       

        $situacionsalud->situaciones_salud_consumos()
            ->updateExistingPivot($consumo->id,
                ['tipo_consumo_id'=>$request->tipo_consumo_id,
                'tratamiento'=>$request->tratamiento,
                'lugar_tratamiento_consumo_id'=>$request->lugar_tratamiento_consumo_id,
                'tipo_tratamiento_consumos_id'=>$request->tipo_tratamiento_consumos_id,
                'habilitado'=>true]);
        
        return redirect($request->url);
    }

    public function destroyConsumo(Request $request, SituacionSalud $situacionsalud, Consumo $consumo){
       //dd($consumo->id);
       $situacionsalud->situaciones_salud_consumos()->detach($consumo->id);

        return redirect($request->url);
        
    }

    


}

