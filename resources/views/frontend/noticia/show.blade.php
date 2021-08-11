@extends('frontend.layouts.main')

@section('title', 'Noticias')

@section('content')
<div class="container content-justify">
    <div class="card-body">
        <div class="text-center">
            <h1 class="pb-2">{{ $noticia->titulo }}</h1>
            <img class="mt-2 mb-2" src="{{ asset('storage/' . $noticia->adjunto) }}" alt="No hay imagen disponible"/>
        </div>
        <div class="row">
            <p>{{ $noticia->cuerpo }}</p>
        </div>
        <div class="row">
            <a class="link-primary" href="./">Volver</a>
        </div>
    </div>
</div>
@endsection