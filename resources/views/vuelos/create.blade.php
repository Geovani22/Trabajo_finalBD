@extends('layouts.app')
@section('content')
<div class="container">


<form action="{{ url('/vuelos') }}" method="post">
@csrf
@include('vuelos.form',['modo'=>'Crear'])

</form>
</div>
@endsection

