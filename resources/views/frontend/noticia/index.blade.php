@extends('frontend.layouts.main')

@section('title', 'Noticias')


@section('content')

@forelse ($noticias as $noticia)
@if($loop->first)
<h1 class="m-5" >Mostrando: {{ $loop->count }} noticias</h1>
@endif
@if($loop->index % 2 == 0)
<div class="row mb-2">
@endif
<div class="col-md-6">
  <div class="card flex-md-row mb-4 shadow-sm h-md-250">
    <div class="card-body d-flex flex-column align-items-start">
    <h4>{{ $noticia->titulo }}</h4>
    <div class="mb-1 text-muted">{{ $noticia->updated_at }}</div>
      <p class="card-text mb-auto">{{ $noticia->cuerpo }}</p>
    </div>
      <img class="card-img-right flex-auto d-none d-lg-block" src="{{ asset('storage/' . $noticia->adjunto) }}" alt="No hay imagen disponible" style="height: 200px;" />
    </div>
  </div>
  @if($loop->index % 2 != 0)
  </div>
  @endif
  @empty
  <p>No hay noticias para mostrar</p>
  @endforelse
  {{ $noticias->links() }}
  @endsection
