@extends('layouts.app')

@section('content')

<form action="{{route('store')}}" method="POST">
    @csrf
    <div class="container py-4 mb-4">
        <h1 class="text-center py-4">Agregar nuevo juego</h1>
        <div class="form-group">
            <input type="text" class="form-control" name="tittle" placeholder="Título">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Descripción">
        </div>
        <div class="form-group">
            Imagen: <input type="file" name="ruta" placeholder="Imagen">
        </div>
    
        <button type="Submit" class="btn btn-primary">Guardar</button>
    </div>
</form>

@endsection