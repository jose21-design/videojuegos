@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('eventos') }}">
    @csrf
    <h1 class="text-center py-4">Próximos Eventos</h1>
        <div id="nueva" class="container-fluid mt-0 mb-0">
          <div class="row">
            <div class="col-lg-6 col-12 pl-0 pr-0">
              <img src="img/video.png" width="100%">
            </div>
            <div class="col-lg-6 pt-4 pb-4">
              <h2>Gran torneo de fifa 2021</h2>
              <p>
                "      Probemos este juego en el próximo torneo que se realizará el día 6 de junio,
                  inscríbete y aparta tu lugar... <a href="">Más información...</a>
                
                " 
              </p><br>
              <h2>Clásicos de KOF 2002</h2>
              <p>
                "      Las clásicas retas de The King of Fighters en un torneo donde los mejores participan,
                  inscríbete y aparta tu lugar... <a href="">Más información...</a>
                
                "  
              </p>
            </div>
          </div>
        </div>
        
            <div class="container mt-4">
                <div class="row">
                    <div class="col text-center text-uppercase">
                        <small>Galería de</small><h2>eventos pasados</h2>
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
        
    
</form>
@endsection