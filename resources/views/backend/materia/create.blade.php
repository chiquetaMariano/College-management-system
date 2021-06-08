@extends('backend.layouts.main')

@section('title', 'Materia | Nuevo')

@section('content')
<h2>Nueva Materia</h2>

<form class="form" action="{{ route('backend.materia.store') }}" method="post">
    <div class="form-group">
      <label for="descripcion">Nombre</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" required autofocus>
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
        <label for="anio">Año</label>
        <select class="form-control" name="anio" required>
            <option value="">- Seleccionar -</option>
            @foreach($anios as $anio)
            <option value="{{ $anio->anio_id }}">{{ $anio->anio }}</option>
            @endforeach
        </select>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="./" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
