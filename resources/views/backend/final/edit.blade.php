@extends('backend.layouts.main')

@section('title', 'Finales | Editar')

@section('content')
<h2>Editar Final</h2>

<form class="form" action="{{ route('backend.final.update', $final->id) }}" method="post">
    <div class="form-group">
      <label for="descripcion">Sede</label>
      <select class="form-control" name="sede" required>
          <option value="">- Seleccionar -</option>
          @foreach($sedes as $sede)
          <option value="{{ $sede->sede_id }}"
                    @if($sede->sede_id === $final->sede_id)
                    selected="selected"
                    @endif
                    >{{ $sede->sede_dn }}</option>
          @endforeach
      </select>
    </div>
    <div class="form-group">
        <label for="carrera">Carrera</label>
        <select class="form-control" name="carrera" required>
            <option value="">- Seleccionar -</option>
            @foreach($carreras as $carrera)
            <option value="{{ $carrera->carrera_id }}"
                @if($carrera->carrera_id === $final->carrera_id)
                selected="selected"
                @endif
                >{{ $carrera->carrera_dn }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="division">División</label>
        <select class="form-control" name="division" required>
            <option value="">- Seleccionar -</option>
            @foreach($divisiones as $division)
            <option value="{{ $division->division_id }}"
                @if($division->division_id === $final->division_id)
                selected="selected"
                @endif
                >{{ $division->division }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="anio">Año</label>
        <select class="form-control" name="anio" required>
            <option value="">- Seleccionar -</option>
            @foreach($anios as $anio)
            <option value="{{ $anio->anio_id }}"
                @if($anio->anio_id === $final->anio_id)
                selected="selected"
                @endif
                >{{ $anio->anio }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="materia">Materia</label>
        <select class="form-control" name="materia" required>
            <option value="">- Seleccionar -</option>
            @foreach($materias as $materia)
            <option value="{{ $materia->materia_id }}"
                @if($materia->materia_id === $final->materia_id)
                selected="selected"
                @endif
                >{{ $materia->materia_dn }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="presidente">Presidente</label>
        <select class="form-control" name="presidente" required>
            <option value="">- Seleccionar -</option>
            @foreach($profesores as $profesor)
            <option value="{{ $profesor->profesor_id }}"
                @if($profesor->profesor_id === $final->presidente)
                selected="selected"
                @endif
                > {{ $profesor->profesor_apellido }}, {{ $profesor->profesor_nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="vocal_1">Vocal 1</label>
        <select class="form-control" name="vocal_1" required>
            <option value="">- Seleccionar -</option>
            @foreach($profesores as $profesor)
            <option value="{{ $profesor->profesor_id }}"
                @if($profesor->profesor_id === $final->vocal_1)
                selected="selected"
                @endif
                > {{ $profesor->profesor_apellido }}, {{ $profesor->profesor_nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="vocal_2">Vocal 2</label>
        <select class="form-control" name="vocal_2" required>
            <option value="">- Seleccionar -</option>
            @foreach($profesores as $profesor)
            <option value="{{ $profesor->profesor_id }}"
                @if($profesor->profesor_id === $final->vocal_2)
                selected="selected"
                @endif
                > {{ $profesor->profesor_apellido }}, {{ $profesor->profesor_nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="llamado">Llamado</label>
        <select class="form-control" name="llamado" required>
            <option value="">- Seleccionar -</option>
            @foreach($llamados as $llamado)
            <option value="{{ $llamado->llamado_id }}"
                @if($llamado->llamado_id === $final->llamado_id)
                selected="selected"
                @endif
                >{{ $llamado->llamado }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input  class="form-control" type="datetime-local" name="fecha" value="{{ $final->fecha }}"/>
    </div>

    <input type="hidden" name="_method" value="PUT" />

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="./" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
