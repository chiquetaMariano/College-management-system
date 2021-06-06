<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">

        <!-- LIBRARIES -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script type="text/javascript">

</script>
