<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">

        <!-- LIBRARIES -->

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
              <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.noticia.index') }}">Noticias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('backend.user.index') }}">Usuarios</a>
              </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('frontend.noticias') }}">Blog</a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
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
