<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img src="img/logo.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse text-size:30px" id="navi">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('welcome') }}">Tu tienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products') }}">Juegos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('eventos') }}">Eventos</a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Ir</button>
      </form>
    </div>
  </nav>
    <!-- End Header -->