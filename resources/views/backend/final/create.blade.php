@extends('backend.layouts.main')

@section('title', 'Finales | Nuevo')

@section('content')
<h2>Nuevo Final</h2>

<form class="form" action="{{ route('backend.final.store') }}" method="post">
    <div class="form-group">
      <label for="descripcion">Sede</label>
      <select class="form-control" name="sede" required>
          <option value="">- Seleccionar -</option>
          @foreach($sedes as $sede)
          <option value="{{ $sede->sede_id }}">{{ $sede->sede_dn }}</option>
          @endforeach
      </select>
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
        <label for="division">División</label>
        <select class="form-control" name="division" required>
            <option value="">- Seleccionar -</option>
            @foreach($divisiones as $division)
            <option value="{{ $division->division_id }}">{{ $division->division }}</option>
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
    <div class="form-group">
        <label for="materia">Materia</label>
        <select class="form-control" name="materia" required>
            <option value="">- Seleccionar -</option>
            @foreach($materias as $materia)
            <option value="{{ $materia->materia_id }}">{{ $materia->materia_dn }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="presidente">Presidente</label>
        <select class="form-control" name="presidente" required>
            <option value="">- Seleccionar -</option>
            @foreach($profesores as $profesor)
            <option value="{{ $profesor->profesor_id }}"> {{ $profesor->profesor_apellido }}, {{ $profesor->profesor_nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="vocal_1">Vocal 1</label>
        <select class="form-control" name="vocal_1" required>
            <option value="">- Seleccionar -</option>
            @foreach($profesores as $profesor)
            <option value="{{ $profesor->profesor_id }}"> {{ $profesor->profesor_apellido }}, {{ $profesor->profesor_nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="vocal_2">Vocal 2</label>
        <select class="form-control" name="vocal_2" required>
            <option value="">- Seleccionar -</option>
            @foreach($profesores as $profesor)
            <option value="{{ $profesor->profesor_id }}"> {{ $profesor->profesor_apellido }}, {{ $profesor->profesor_nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="llamado">Llamado</label>
        <select class="form-control" name="llamado" required>
            <option value="">- Seleccionar -</option>
            @foreach($llamados as $llamado)
            <option value="{{ $llamado->llamado_id }}">{{ $llamado->llamado }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input  class="form-control" type="datetime-local" name="fecha" />
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="./" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
