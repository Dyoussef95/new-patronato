<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historia;
use App\Interno;
use App\Regimen;
use App\Empleado;
use App\DelitoEspecifico;
use App\SituacionProcesal;
use App\MotivoIngresoPrograma;
use App\FrecuenciaControl;
use App\JuzgadoEspecifico;
use App\Oficio;
use Carbon\Carbon;

class HistoriaController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $historias = Historia :: orderBy('fechaInicio','asc')->get();
        return view('historias.index', compact('historias'));
    }

    public function show(Historia $historia)
    {
     return view('historias.show',['historia'=>$historia]);
    }

    public function create(Interno $interno)
    {
        $internos = Interno::all();
        $regimenes = Regimen::all();
        $delitoespecificos = DelitoEspecifico::all();
        $situacionprocesales = SituacionProcesal::all();
        $motivosdeingresoalprograma = MotivoIngresoPrograma::all();
        $frecuenciacontroles = FrecuenciaControl::all();
        $juzgadoespecificos = JuzgadoEspecifico::all();
        return view('historias.create',compact('internos','regimenes','delitoespecificos','situacionprocesales'
        ,'motivosdeingresoalprograma','frecuenciacontroles','juzgadoespecificos'))->with('interno',$interno);
    }

    public function store(Request $request)
    {
        //dd(request()->all());
        $url=$request->url;
        $historia = new Historia;
        Historia::create(request()->all());
        return redirect($url);
    }

    public function edit(Historia $historia){
        
        $internos = Interno::all();
        $regimenes = Regimen::all();
        $delitoespecificos = DelitoEspecifico::all();
        $situacionprocesales = SituacionProcesal::all();
        $motivosdeingresoalprograma = MotivoIngresoPrograma::all();
        $frecuenciacontroles = FrecuenciaControl::all();
        $juzgadoespecificos = JuzgadoEspecifico::all();
        return view('historias.edit',compact('historia','internos','regimenes','delitoespecificos','situacionprocesales'
        ,'motivosdeingresoalprograma','frecuenciacontroles','juzgadoespecificos'));
    }

    public function update(Request $request,Historia $historia)
    {
        
        $url=$request->url;
        
       $historia->update($request->all());
       /*se controla si en el formulario se modifica el empleado asociado a la historia*/
       if(isset($request->empleado_id)){
            $empleado_id = $historia->empleado()->first()->id;
            $historia->empleado()->detach($empleado_id);
            $historia->empleado()->attach($request->empleado_id);
       }
       $interno= $historia->interno_id;
       $procedencia=2;

       return redirect()->route('internos.show',[$interno,$procedencia]);
    }

    public function destroy(Historia $historia)
    {
        $historia->delete();

        return redirect('historias');
    } 
    
    public function indexMesaEntrada(){

        $internos = Interno :: get();
        $historias = Historia :: get();
        $oficios = collect();

        foreach($historias as $historia){
            $id = $historia->id;
            $oficiosHistoria = Oficio::where('historia_id',$id)->get();
            $oficios->put($id,$oficiosHistoria);
            foreach($oficios->get($id) as $oficio){
                dd($oficio);
            }
        }

        //dd($oficios);
        return view('mesaentrada.index', compact('internos'));
    }

    public function createMesaEntrada()
    {
        //se genera un nuevo legajo
        $ultLegajo = Interno ::max('legajo');
        $nuevoLegajo = $ultLegajo+1;
        $hoy = Carbon::now();
        $hoy = $hoy->format('Y-m-d');
        
        $motivoingresoprogramas = MotivoIngresoPrograma::all();
        $juzgados = JuzgadoEspecifico::all();
        $regimenes = Regimen::all();
        $empleados = Empleado::all();
        return view('mesaentrada.create',compact('motivoingresoprogramas','juzgados','regimenes','empleados'))->with('nuevoLegajo',$nuevoLegajo)->with('hoy',$hoy);
    }

    public function storeMesaEntrada(Request $request){

        $request->validate([
            'nombre' => 'regex:/^[\pL\s\-]+$/u',
            'apellido'=>'regex:/^[\pL\s\-]+$/u',
        ]);        
        
        $internoController = new InternoController;
        $interno = $internoController->store($request);
       
        $historia = new Historia;
        $historia->fecha_inicio = $request->fecha_inicio;
        $historia->juzgado_especifico_id = $request->procedencia_id;
        $historia->regimen_id = $request->regimen_id;
        $historia->interno()->associate($interno); 
        $historia->save();
        $historia->empleado()->attach($request->empleado_id);
        return redirect('mesa-entrada');

    }

    public function nuevoInterno(Request $request, Interno $interno){
        
        $historia = new Historia;
        $historia->fecha_inicio = $request->fecha_inicio;
        $historia->juzgado_especifico_id = $request->procedencia_id;
        $historia->regimen_id = $request->regimen_id;
        $historia->interno_id= $interno->id; 
        $historia->save();
        $historia->empleado()->attach($request->empleado_id);
        return $historia;
        
    }

    public function editMesaEntrada($historia)
    {
        //no se porque no busca automaticamente el registro en la base de datos, por lo que lo busco de forma manual
        $historia = Historia::find($historia);
        $motivoingresoprogramas = MotivoIngresoPrograma::all();
        $juzgadoespecificos = JuzgadoEspecifico::all();
        $regimenes = Regimen::all();
        $empleados = Empleado::all();
        
        return view('mesaentrada.edit',compact('historia','motivoingresoprogramas','juzgadoespecificos','regimenes','empleados'));
    }

    public function updateMesaEntrada(Request $request, Historia $historia)
    {
        dd($request);
       $url=$request->url;
       $historia->update($request->all());
       return "exito";
    }


}
