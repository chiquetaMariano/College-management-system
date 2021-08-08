@extends('backend.layouts.main')

@section('title', 'Noticia | Nuevo')

@section('content')
<h2>Editar Noticia</h2>

<form class="form" action="{{ route('backend.noticia.update', $noticia->id) }}" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nombre">ID</label>
        <input type="text" class="form-control" value="{{ $noticia->id }}" name="noticia_id" disabled/>
    </div>

    <div class="form-group">
        <label for="carrera">Carrera</label>
        <select class="form-control" name="carrera" required>
            <option value="">- Seleccionar -</option>
            @foreach($carreras as $carrera)
            <option value="{{ $carrera->carrera_id }}"
                    @if($carrera->carrera_id === $noticia->carrera_id)
                    selected="selected"
                    @endif
                    >{{ $carrera->carrera_dn }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="anio">Curso</label>
        <select class="form-control" name="anio" required>
            <option value="">- Seleccionar -</option>
            @foreach($anios as $anio)
            <option value="{{ $anio->anio_id }}"
                    @if($anio->anio_id === $noticia->anio_id)
                    selected="selected"
                    @endif
                    >{{ $anio->anio }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
      <label for="titulo">Título Noticia</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $noticia->titulo }}" required autofocus>
    </div>

    <div class="form-group">
        <label for="cuerpo">Cuerpo Noticia</label>
        <textarea name="cuerpo" id="cuerpo" cols="30" rows="10" class="form-control">{{ $noticia->cuerpo }}</textarea>
    </div>

    <div class="form-group">
        <label for="adjunto">Adjunto</label>
        <input type="file" class="form-control-file" name="adjunto" id="adjunto">
    </div>

    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input  class="form-control" type="datetime-local" name="fecha" value="{{ $noticia->fecha }}"/>
    </div>

    <div class="form-group">
        <label for="oculta">¿Ocultar?</label>
        <input type="checkbox" name="oculta" id="oculta"
        @if($noticia->ocultar)
            checked
        @endif
        />
    </div>

    <input type="hidden" name="_method" value="PUT" />

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="./" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
