@extends('layouts.app')

@section('content')
<!-- Main -->
<main id="main">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/port.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/porte.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/dif.jpg" class="d-block w-100" alt="...">
          </div>

          <div class="overlay">
            <div class="container">
                <div class="row align-items-center">

                   <div class="col-md-6 offset-md-3 text-md-rigth text-center mt-4">
                      <h2 class="text-white">Que esta cuarentena</h2>
                      <h2 class="text-white">no dejes de jugar</h2>
                      <h1 class="text-white">¡Increíbles rebajas en tus videojuegos!</h1>
                      <a href="" class="btn btn-primary">Quiero colaborar</a>
                  </div>

                </div>
            </div>
        </div>

        </div>
      </div>
</main>
<!-- /Main -->

<!-- Clase Online -->
<div class="container mt-4">
  <div class="row">
      <div class="col text-center text-uppercase">
          <h2>XBOX ONE</h2>
      </div>
  </div>

  <div class="row">
      <div class="col-12 col-md-4 col-lg-4 mb-4">
           <img src="img/uno.jpg">
           Minecraft
      </div>

      <div class="col-12 col-md-4 col-lg-4 mb-4">
           <img src="img/dos.jpg">
           <br> Realidad virtual
      </div>

      <div class="col-12 col-md-4 col-lg-4 mb-4">
           <img src="img/tres.jpg">
           Gaming en equipo
      </div>
  </div>

  <div class="row">
    <div class="col text-center text-uppercase">
        <h2>PLAY STATION 4</h2>
    </div>
</div>

  <div class="row">
    <div class="col-12 col-md-4 col-lg-4 mb-4">
         <img src="img/cuatro.jpg">
         <br> Rifa por nuestro 5 aniversario
    </div>

    <div class="col-12 col-md-4 col-lg-4 mb-4">
         <img src="img/cinco.jpg">
         <br> Premios primeros lugares del KOF 2020
    </div>

    <div class="col-12 col-md-4 col-lg-4 mb-4">
         <img src="img/seis.jpg">
         Patrocinios
    </div>
</div>
</div>
<!-- End/clase online -->
@endsection
