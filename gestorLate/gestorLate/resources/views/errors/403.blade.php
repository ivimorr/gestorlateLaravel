@extends('layouts.app') 

@section('content')
<div class="container text-center mt-5">
    <h1 class="text-danger">403 - Acceso denegado</h1>
    <p>No tienes permiso para acceder a esta sección del sistema.</p>
    <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Volver atrás</a>
</div>
@endsection
