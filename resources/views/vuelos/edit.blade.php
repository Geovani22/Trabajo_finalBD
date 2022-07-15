@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/vuelos/'.$gestion_vuelos->id) }}" method="post">
    @csrf
    {{ method_field('PATCH')}}
    @include('vuelos.form',['modo'=>'Editar'])

</form>
</div>
@endsection