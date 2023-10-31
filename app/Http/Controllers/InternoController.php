<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Interno;
use App\TipoDelito;
use App\EstadoCivil;
use App\SituacionLaboral;
use App\JuzgadoTipo;
use App\NivelEstudio;
use App\TipoDocumento;
use App\Sexo;
use App\Caps;
use App\Trabajo;
use App\Localidad;
use App\Departamento;
use App\Nacionalidad;
use App\SituacionSalud;
use App\SituacionSaludEnfermedad;
use App\Historia;
use App\GrupoFamiliar;
use App\Parentezco;
use App\Empleado;
use Carbon\Carbon;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\InternosImport;

class InternoController extends Controller
{

    public function index()
    {
        $internos = Interno :: orderBy('apellido','desc')->get();
        $historias = Historia::get();
        $situacionsaludenfermedads = SituacionSaludEnfermedad :: get();        
        return view('internos.index', compact('internos','situacionsaludenfermedads','historias'));
    }

    public function show(Interno $interno)
    {
    $situacionsaluds = SituacionSalud :: get();
    $situacionsaludenfermedads = SituacionSaludEnfermedad :: get();
    $gruposFamiliares = GrupoFamiliar::get()->where('interno_id',$interno->id);
    $parentezcos = Parentezco::get();
    $tiposDocumento = TipoDocumento::get();
    /*if($gruposFamiliares->isEmpty()){
      $gruposFamiliares=null; 
    }*/
    $empleado_id = $interno->historia()->first()->empleado()->first()->id;
    
    $edad = Carbon::parse($interno->fecha_nacimiento)->age;
   
     return view('internos.show',compact('tiposDocumento','empleado_id','situacionsaludenfermedads',
     'situacionsaluds','gruposFamiliares','parentezcos'))
        ->with('interno',$interno)
        ->with('historia',$interno->historia()->first())
        ->with('edad',$edad);
    }

    public function create()
    {
        $estadociviles = EstadoCivil::all();
        $situacioneslaborales = SituacionLaboral::all();
        $nivelestudios = NivelEstudio::all();
        $tipodocumentos = TipoDocumento::all();
        $sexos = Sexo::all();
        $trabajos = Trabajo::all();
        $departamentos = Departamento::all();
        $localidades = Localidad::all();
        $juzgadotipos = JuzgadoTipo::all();
        $nacionalidades = Nacionalidad::all();


       return view('internos.create', compact('estadociviles','situacioneslaborales','nivelestudios','tipodocumentos','sexos'
                    ,'trabajos','localidades','departamentos','juzgadotipos','nacionalidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'regex:/^[\pL\s\-]+$/u',
            'apellido'=>'regex:/^[\pL\s\-]+$/u',
        ]);

        $interno = new Interno;
        $interno->legajo = $request->legajo;
        $interno->nombre=mb_strtoupper($request->nombre);
        $interno->apellido=mb_strtoupper($request->apellido);
        $interno->save();   
        
        $situacionSaludController = new SituacionSaludController;
        $situacionSalud = $situacionSaludController->nuevoInterno($interno);
       
        return $interno;
    }

    public function edit(Interno $interno){   

        $estadociviles = EstadoCivil::all();
        $situacioneslaborales = SituacionLaboral::all();
        $nivelestudios = NivelEstudio::all();
        $tipodocumentos = TipoDocumento::all();
        $sexos = Sexo::all();
        $trabajos = trabajo::all();
        $localidades = Localidad::all();
        $departamentos = Departamento::all();
        $juzgadotipos = JuzgadoTipo::all();
        $nacionalidades = Nacionalidad::all();

       return view('internos.edit', compact('interno','estadociviles','situacioneslaborales','nivelestudios','tipodocumentos','sexos'
                    ,'trabajos','localidades','departamentos','juzgadotipos','nacionalidades'));
    }

    public function update(Request $request, Interno $interno)
    {
       $interno->update($request->all());
       return redirect('internos');
    }

    public function destroy(Interno $interno)
    {
        $interno->delete();
        $url=request()->url;
        return redirect($url);
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        
        Excel::import(new InternosImport, $file);
        
        return back()->with('message', 'Importanción de internos completada');
    }
}
