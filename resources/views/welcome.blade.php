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
      <div class="col text-center text-uppercase py-4">
          <h2>XBOX ONE</h2>
      </div>
  </div>

  <div class="row">
      <div class="col-12 col-md-3 col-lg-3 mb-3">
           <img src="img/viduno.png">
           <br> Grand theft Auto
      </div>

      <div class="col-12 col-md-3 col-lg-3 mb-3">
           <img src="img/viddos.png">
           <br> BattleField
      </div>

      <div class="col-12 col-md-3 col-lg-3 mb-3">
           <img src="img/vidtres.png">
           <br> Forza
      </div>

      <div class="col-12 col-md-3 col-lg-3 mb-3">
        <img src="img/vidsiete.png">
        <br> Call of duty
   </div>
  </div>

  <div class="row">
    <div class="col text-center text-uppercase py-4">
        <h2>NINTENDO SWITCH</h2>
    </div>
</div>

  <div class="row">
    <div class="col-12 col-md-3 col-lg-3 mb-3">
         <img src="img/vidcuatro.png">
         <br> Zelda
    </div>

    <div class="col-12 col-md-3 col-lg-3 mb-3">
         <img src="img/vidcinco.png">
         <br> Mario Kart
    </div>

    <div class="col-12 col-md-3 col-lg-3 mb-3">
         <img src="img/vidseis.png">
         <br>Minecraft
    </div>

    <div class="col-12 col-md-3 col-lg-3 mb-3">
      <img src="img/vidocho.png">
      <br> Super Smash Bros
 </div>
</div>
</div>
<!-- End/clase online -->
@endsection
