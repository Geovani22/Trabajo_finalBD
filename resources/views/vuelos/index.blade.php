@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))

{{ Session::get('mensaje') }}

@endif

<a href="{{ url('vuelos/create')}}" class="btn btn-success">Registrar nuevo vuelo</a>
<br/>
<br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Aereolinea</th>
            <th>Hora</th>
            <th>Fecha</th>
            <th>Clase</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vuelos as $vuelo)
        <tr>
            <td>{{$vuelo->id}}</td>
            <td>{{$vuelo->Origen}}</td>
            <td>{{$vuelo->Destino}}</td>
            <td>{{$vuelo->Aereolinea}}</td>
            <td>{{$vuelo->Hora}}</td>
            <td>{{$vuelo->Fecha}}</td>
            <td>{{$vuelo->Clase}}</td>
            <td>{{$vuelo->Precio}}</td>
            <td>
            
            <a href="{{ url('/vuelos/'.$vuelo->id.'/edit') }}">Editar</a>
            
            <form action="{{ url('/vuelos/'.$vuelo->id) }}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Desea borrar?')" value="Borrar">
            </form>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection