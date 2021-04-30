<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">

        <!-- LIBRARIES -->

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- CUSTOM -->
        <script type="text/javascript" src="/js/script.js"></script>
        <link rel="stylesheet" href="/css/main.css">

        <title>@yield('title')</title>
    </head>
    <body>

        <div id="wrapper">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
          <span class="navbar-toggler-icon leftmenutrigger"></span>
          <a class="navbar-brand" href="#">ISFT 38</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav animate side-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.sede.index') }}">Sedes
                  <!-- <span class="sr-only">(current)</span> -->
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.carrera.index') }}">Carreras</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.materia.index') }}">Materias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.profesor.index') }}">Profesores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.division.index') }}">Divisiones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.llamado.index') }}">Llamados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.final.index') }}">Finales</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
