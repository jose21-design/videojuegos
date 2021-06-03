@extends('layouts.app')

@section('content')

<div class="text-center py-4">
    <h1>Videojuegos</h1>
</div>
<div class="container py-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Imagen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->tittle}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->ruta}}</td>
                <td> <a href="" class="btn btn-link">Editar</a> </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <a href="{{url('/products/create')}}" class="btn btn-primary">Agregar</a>

</div>


@endsection
