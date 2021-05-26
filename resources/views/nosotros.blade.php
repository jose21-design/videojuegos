@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('nosotros') }}">
    @csrf
    <h1>Nosotros</h1>

    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4679.057194397892!2d-101.93651299042675!3d21.353811988867808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bd235c63dde59%3A0x926020efd084d812!2sC.Miguel%20Hidalgo%20y%20Costilla%2C%20Centro%2C%20Lagos%20de%20Moreno%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1622042536165!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</form>
@endsection
