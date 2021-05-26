@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('eventos') }}">
    @csrf
    <h1>Eventos</h1>
</form>
@endsection