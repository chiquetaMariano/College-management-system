@extends('backend.layouts.main')

@section('title', 'Noticia | Nuevo')

@section('content')
<h2>Nueva Noticia</h2>

<form class="form" action="{{ route('backend.noticia.store') }}" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nombre">ID</label>
        <input type="text" class="form-control" value="{{ $noticia->noticia_id ?? 0 }}" name="noticia_id" disabled/>
    </div>

    <div class="form-group">
        <label for="carrera">Carrera</label>
        <select class="form-control" name="carrera" required>
            <option value="">- Seleccionar -</option>
            @foreach($carreras as $carrera)
            <option value="{{ $carrera->carrera_id }}">{{ $carrera->carrera_dn }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="anio">Curso</label>
        <select class="form-control" name="anio" required>
            <option value="">- Seleccionar -</option>
            @foreach($anios as $anio)
            <option value="{{ $anio->anio_id }}">{{ $anio->anio }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
      <label for="titulo">Título Noticia</label>
      <input type="text" class="form-control" id="titulo" name="titulo" required autofocus>
    </div>

    <div class="form-group">
        <label for="cuerpo">Cuerpo Noticia</label>
        <textarea name="cuerpo" id="cuerpo" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="adjunto">Adjunto</label>
        <input type="file" class="form-control-file" id="adjunto" name="adjunto">
    </div>

    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input  class="form-control" type="datetime-local" name="fecha" />
    </div>

    <div class="form-group">
        <label for="oculta">¿Ocultar?</label>
        <input type="checkbox" name="oculta" id="oculta" />
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="./" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
