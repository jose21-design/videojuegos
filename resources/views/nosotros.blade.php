@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('nosotros') }}">
    @csrf
    <h1>Nosotros</h1>
</form>
@endsection
