@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('eventos') }}">
    @csrf
    <h1 class="text-center">Próximos Eventos</h1>
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
        <section id="cursos" class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center text-uppercase">
                        <small>Conoce nuestros</small><h2>Cursos</h2>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <div class="card" >
                            <img src="images/html.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Html</h5>
                              <p class="card-text">Es un  lenguaje de marcado que se utiliza para el desarrollo de páginas web.</p>
                              <a href="#" class="btn btn-tecnoeduca" data-toggle="modal" data-target="#htmlModal">Ver curso</a>
                            </div>
                          </div>
                    </div>
        
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <div class="card">
                            <img src="images/css.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Css</h5>
                              <p class="card-text">Hojas de estilo en cascada, es el lenguaje de estilos utilizado para describir la presentación en documentos html.</p>
                              <a href="#" class="btn btn-tecnoeduca">Ver curso</a>
                            </div>
                          </div>
                    </div>
        
                    <div class="col-12 col-md-4 col-lg-4 mb-2">
                        <div class="card" >
                            <img src="images/javascript.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">JavaScript</h5>
                              <p class="card-text">Es un lenguaje de programación ligero, interpetado o compilado con funciones de primera clase.</p>
                              <a href="#" class="btn btn-tecnoeduca">Ver curso</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
    
            
         </section>
        <!-- /Cursos -->
    
</form>
@endsection