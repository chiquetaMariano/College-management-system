<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">

        <!-- LIBRARIES -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
                        <!-- <a class="btn btn-link text-justify" data-toggle="collapse" href="#filter" role="button" aria-expanded="false" aria-controls="filter">Filtrar</a>
                        <div class="collapse" id="filter">
                        </div> -->
                        <div id="finales-filter" class="card-body">
                            @include('frontend.finales.filter')
                        </div>
                    </div>
                    <!-- <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </body>
</html>

<script type="text/javascript">

</script>
