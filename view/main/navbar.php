<nav id="myNav" class="navbar navbar-expand-lg <?=$color = !isset($_GET['view']) || $_GET['view'] == "home" ? "bg-transparente home" : "bg-blanco" ;?> navbar-light menu borde-nav">
  <div class="container text-center">
    <a class="navbar-brand btn btn-light mx-auto d-block d-md-none" href="<?=Router::redirigir('home')?>"><img loading="lazy" src="<?=DEP_IMG?>original.png" width="30px"> Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars mini text-gold"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item d-none d-md-block">
          <a data-scroll class="btn btn-light mx-4 d-block" href="<?=Router::redirigir('home')?>">
            <i class="fas fa-home fa-1x"></i>
          </a>
        </li>  
        <li class="nav-item">
          <a data-scroll class="btn btn-light mx-4 d-block" href="<?=Router::redirigir('firma')?>">
            LA FIRMA
          </a>
        </li>  
        <li class="nav-item">
          <a data-scroll class="btn btn-light mx-4 d-block" href="<?=Router::redirigir('servicios')?>">
            SERVICIOS
          </a>
        </li>  
        <li class="nav-item">
          <a data-scroll class="btn btn-light mx-4 d-block" href="<?=Router::redirigir('ambitos')?>">
            ÁMBITOS
          </a>
        </li>        
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a data-scroll class="btn btn-light mx-4 d-block" href="<?=Router::redirigir('ubicacion')?>">
            UBICACIÓN
          </a>
        </li>         
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a data-scroll class="btn btn-light mx-4 d-block" href="<?=Router::redirigir('contacto')?>">
            CONTACTO
          </a>
        </li>         
      </ul>
    </div>
  </div>
</nav>