
@extends('index')

@section('content')
<button type="button" class="btn btn-primary" onclick="openCreateForm()">Agregar Nuevo</button>
    <table class="table" id="tabla">
        <thead>
          <tr>
            @yield('columns')
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
            @yield('data')
        </tbody>
      </table>

      
      @yield('create')

      @yield('update')


        
                  
@endsection