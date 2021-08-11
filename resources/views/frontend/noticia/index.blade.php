@extends('frontend.layouts.main')

@section('title', 'Noticias')


@section('content')
<div class="">
  <div class="form-control">
    <form action="{{ route('frontend.por-carrera') }}" method="post">
      <div class="form-group">
        <label for="carrera_id">Mostrar por carrera</label>
        <div class="row">
          <div class="col-md-11">
            <select class="form-control" name="carrera_id" required>
              <option value="">- Seleccionar -</option>
              @foreach($carreras as $carrera)
              <option value="{{ $carrera->carrera_id }}">{{ $carrera->carrera_dn }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-1 pl-0">
            <button class="btn btn-primary" type="submit">Filtrar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  </div>
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
      <a href="{{ route('frontend.noticia.leer', $noticia->id) }}">Leer</a>
    </div>
      <img class="card-img-right flex-auto d-none d-lg-block" src="{{ asset('storage/' . $noticia->adjunto) }}" alt="" style="height: 200px;" />
    </div>
  </div>
  @if($loop->index % 2 != 0)
  </div>
  @endif
  @empty
  <div class="card-body">
    <p class="text-center">No hay noticias para mostrar</p>
  </div>
  @endforelse
  <div class="row">
      {{ $noticias->links() }}
  </div>
  @endsection
