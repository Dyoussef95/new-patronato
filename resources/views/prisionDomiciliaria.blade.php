@extends('layout')

@section('title','Prision')

@section('content')
    <p>Prision domiciliaria.</p>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
          </tr>
        </thead>
        <tbody>
        	@foreach($areas as $area)
        	<tr>
        		<td>{!! $area -> id !!}</td>
        		<td>{!! $area -> nombre !!}</td>
        		<td>{!! $area -> habilitado !!}</td>
        	</tr>
        	@endforeach
        </tbody>
      </table>
      
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
      <button type="button" class="btn btn-primary" onclick="agregar()">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>

      <script src="js/agregar.js"></script>
@endsection


