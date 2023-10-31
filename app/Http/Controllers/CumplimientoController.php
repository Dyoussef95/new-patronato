<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cumplimiento;
use App\Historia;
use App\MotivoFinSupervision;

class CumplimientoController extends Controller
{

    public function index()
    {
        $cumplimientos = Cumplimiento :: get();
        return view('cumplimientos.index', compact('cumplimientos'));
    }

    public function show(Cumplimiento $cumplimiento)
    {
     return view('cumplimientos.show',['cumplimiento'=>$cumplimiento]);
    }

    public function create()
    {
        $historias = Historia::all();
        $motivofinsupervisions = MotivoFinSupervision::all();
        return view('cumplimientos.create',compact('historias','motivofinsupervisions'));
    }

    public function store(Request $request)
    {
        //dd(request()->all());
        Cumplimiento::create(request()->all());
        return redirect('cumplimientos');
    }

    public function edit(Cumplimiento $cumplimiento){
        
        $historias = Historia::all();
        $motivofinsupervisions = MotivoFinSupervision::all();
        return view('cumplimientos.edit',compact('cumplimiento','historias','motivofinsupervisions'));
    }

    public function update(Cumplimiento $cumplimiento)
    {
       $cumplimiento->update(request()->all());
       return redirect('cumplimiento');
    }

    public function destroy(Cumplimiento $cumplimiento)
    {
        $cumplimiento->delete();

        return redirect('cumplimiento');
    }
}
