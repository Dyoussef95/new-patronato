<?php

namespace App\Http\Controllers;

use App\GrupoFamiliar;
use App\Interno;
use App\Parentezco;
use App\TipoDocumento;
use App\Sexo;
use App\NivelEstudio;
use App\EstadoCivil;
use App\SituacionLaboral;
use App\Trabajo;
use Illuminate\Http\Request;

class GrupoFamiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Interno $interno)
    {
        $gruposFamiliares = GrupoFamiliar::get()->where('interno_id',$interno->id);
        $parentezcos = Parentezco::get();
        $empleado_id = $interno->historia()->first()->empleado()->first()->id;
        return view('GruposFamiliares.index',compact('empleado_id','gruposFamiliares','interno','parentezcos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Interno $interno)
    {
        $parentezcos=Parentezco::get();
        $tiposDocumentos=TipoDocumento::get();
        $sexos=Sexo::get();
        $nivelesEstudio=NivelEstudio::get();
        $estadosCiviles=EstadoCivil::get();
        $situacionesLaborales=SituacionLaboral::get();
        $trabajos=Trabajo::get();
        return view('GruposFamiliares.create',compact('interno','parentezcos','tiposDocumentos',
        'sexos','nivelesEstudio','estadosCiviles','situacionesLaborales','trabajos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Interno $interno)
    {
        $grupoFamiliar = new GrupoFamiliar;
        $grupoFamiliar->nombre=strtoupper($request->nombre);
        $grupoFamiliar->apellido=strtoupper($request->apellido);
        $grupoFamiliar->interno_id=$interno->id;
        $grupoFamiliar->parentesco_id=$request->parentezco_id;
        $grupoFamiliar->fecha_nacimiento=$request->fecha_nacimiento;
        $grupoFamiliar->domicilio=$request->domicilio;
        $grupoFamiliar->numero_documento=$request->numero_documento;
        $grupoFamiliar->tipo_documento_id=$request->tipo_documento_id;
        $grupoFamiliar->sexo_id=$request->sexo_id;
        $grupoFamiliar->nivel_estudio_id=$request->nivel_estudio_id;
        $grupoFamiliar->estado_civil_id=$request->estado_civil_id;
        $grupoFamiliar->situacion_laboral_id=$request->situacion_laboral_id;
        $grupoFamiliar->trabajo_id=$request->trabajo_id;
        $grupoFamiliar->observacion=$request->observacion;
        $grupoFamiliar->save();
        $procedencia=4;
        return redirect()->route('internos.show', [$interno,$procedencia]);
        /*nombre apellido parentezco_id fecha_nacimiento tipo_documento_id numero_documento sexo_id 
          domicilio nivel_estudio_id  estado_civil_id situacion_laboral_id trabajp_id observacion */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GrupoFamiliar  $grupoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function show(GrupoFamiliar $grupoFamiliar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GrupoFamiliar  $grupoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function edit(GrupoFamiliar $grupoFamiliar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GrupoFamiliar  $grupoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrupoFamiliar $grupoFamiliar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GrupoFamiliar  $grupoFamiliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interno $interno,GrupoFamiliar $grupoFamiliar)
    {
        $grupoFamiliar->delete();
        $procedencia=4;
        return redirect()->route('internos.show', [$interno,$procedencia]);
    }
}
