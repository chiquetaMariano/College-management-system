@extends('backend.layouts.main')

@section('title', 'Admin')

@section('content')
<div class="text-justify">
<h1>Bienvenido {{ Auth::user()->name }}</h1>
<div class="mt-5">
    <p>Utilice el menú desplegable a la izquierda para ver las distintas opciones.</p>
</div>
</div>
@endsection
