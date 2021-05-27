<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">

        <!-- LIBRARIES -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- CUSTOM -->
        <link rel="stylesheet" href="/css/main.css">

        <title>@yield('title')</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ISFT 38</a>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- <a class="btn btn-primary" data-toggle="collapse" href="#finales-filter" role="button" aria-expanded="false" aria-controls="finales-filter">Filtros</a>
                        <div class="collapse">
                        </div> -->
                        <div id="finales-filter" class="card-body">
                            @include('frontend.finales.filter')
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>

<script type="text/javascript">

</script>
