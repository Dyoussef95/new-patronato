@extends('index')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/jquery.dataTables.js') }}" defer></script>
<script src="{{ asset('js/oficios.js') }}" defer></script>
@endsection

@section('content')

<h1>Mesa de Entrada: Oficios</h1> 

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="administrativo-tab" data-toggle="tab" href="#administrativo" role="tab" aria-controls="administrativo" aria-selected="true">Administrativo</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="tecnico-tab" data-toggle="tab" href="#tecnico" role="tab" aria-controls="tecnico" aria-selected="false">Tecnico</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="administrativo" role="tabpanel" aria-labelledby="admnistrativo-tab">
        <br>
        <a href="oficios/administrativo/create" class="btn btn-primary">Agregar Nuevo</a>
        <br><br>
        <div class="table table-sm table-responsive">
            <table id="dataTableAdministrativo" name="dataTableAdministrativo" class="table table-hover table-fixed">
                <thead class="thead-dark">
                    <tr>
                        <th>Fecha</th>
                        <th>Numero</th>
                        <th>Descripcion</th>
                        <th>Procedencia</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($oficiosAdministrativos as $oficioAd)
                    <tr>
                        <td>{!! $oficioAd->fecha !!}</td>
                        <td>{!! $oficioAd->numero !!}</td>
                        <td>{!! $oficioAd->descripcion !!}</td>
                        <td>
                            @isset($oficioAd->procedencia_id)
                            {!! $juzgados->find($oficioAd->procedencia_id)->nombre !!}
                            @endisset
                        </td>
                        <td>
                            <form action="/oficios/{{ $oficioAd->id}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <input type="hidden" name="url" class="form-control" id="" value={{URL::current()}}>

                                <button type="submit" onclick="return confirm('Esta seguro?')" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="tab-pane fade" id="tecnico" role="tabpanel" aria-labelledby="tecnico-tab">
        <br>
        <a href="./mesa-entrada" class="btn btn-primary">Agregar Nuevo</a>
        <br><br>
        <div class="table table-sm table-responsive">

            <table id="dataTableTecnico" name="dataTableTecnico" class="table table-hover table-fixed">
                <thead class="thead-dark">
                    <tr>
                        <th>Fecha</th>
                        <th>Numero</th>
                        <th>Asistido</th>
                        <th>Descripcion</th>
                        <th>Procedencia</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($oficiosTecnicos as $oficioTec)
                    <tr>
                        <td>{!! $oficioTec->fecha !!}</td>
                        <td>{!! $oficioTec->numero !!}</td>
                        <td>{!! $internos->find($historias->find($oficioTec->historia_id)->interno_id)->apellido!!} {!! $internos->find($historias->find($oficioTec->historia_id)->interno_id)->nombre !!} </td>
                        <td>{!! $oficioTec->descripcion !!}</td>
                        <td>
                            @isset($oficioTec->procedencia_id)
                            {!! $juzgados->find($oficioTec->procedencia_id)->nombre !!}
                            @endisset
                        </td>
                        <td>
                        @if($oficioTec->tipo_oficio!=3)
                            <form action="/oficios/{{ $oficioTec->id}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <input type="hidden" name="url" class="form-control" id="" value={{URL::current()}}>

                                <button type="submit" onclick="return confirm('Esta seguro?')" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
