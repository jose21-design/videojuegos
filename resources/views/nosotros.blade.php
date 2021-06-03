@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('nosotros') }}">
    @csrf
    

    <div class="text-center py-4">
        <img src="img/captura.png" alt="" srcset="">
        <h1>Acerca de nosotros</h1><br>
    </div>
    <div class="text-center mt-4">
        <h3>Misión</h3>
        <h5>Somos una empresa dedicada a la venta de videojuegos para todo tipo de consolas, procurando un buen servicio y la calidad de nuestros productos</h5><br>
        <h3>Visión</h3>
        <h5>Posicionarnos en la mente del consumidor como referente número uno en la región de Lagos de Moreno</h5><br>
    </div>
        <div class="text-center mt-4">
            <h3>Ubicación</h3>
            <h5>Hidalgo, Centro, Lagos de Moreno</h5>
            <h5>jdjrv.13@gmail.com</h5>
            <h4>Horario:</h4>
            <h5>Lunes - Viernes 12:00 - 08:00 pm / Sábado - Domingo 10:00 am - 07:00 pm</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4679.057194397892!2d-101.93651299042675!3d21.353811988867808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bd235c63dde59%3A0x926020efd084d812!2sC.Miguel%20Hidalgo%20y%20Costilla%2C%20Centro%2C%20Lagos%20de%20Moreno%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1622042536165!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    
</form>
@endsection
