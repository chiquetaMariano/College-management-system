@extends('backend.layouts.main')

@section('title', 'Materia | Editar')

@section('content')
<h2>Editar Materia</h2>

<form class="form" action="{{ route('backend.materia.update', $materia->materia_id) }}" method="post">
    <div class="form-group">
        <label for="nombre">ID</label>
        <input type="text" class="form-control" value="{{ $materia->materia_id }}" name="materia_id" disabled/>
    </div>
    <div class="form-group">
      <label for="descripcion">Nombre</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $materia->materia_dn }}" required autofocus>
    </div>
    <div class="form-group">
        <label for="carrera">Carrera</label>
        <select class="form-control" name="carrera" required>
            <option value="">- Seleccionar -</option>
            @foreach($carreras as $carrera)
            <option value="{{ $carrera->carrera_id }}"
                    @if($carrera->carrera_id === $materia->carrera_id)
                    selected="selected"
                    @endif
                    >{{ $carrera->carrera_dn }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="anio">Año</label>
        <select class="form-control" name="anio" required>
            <option value="">- Seleccionar -</option>
            @foreach($anios as $anio)
            <option value="{{ $anio->anio_id }}"
                    @if($anio->anio_id === $materia->anio_id)
                    selected="selected"
                    @endif
                    >{{ $anio->anio }}</option>
            @endforeach
        </select>
    </div>

    <input type="hidden" name="_method" value="PUT" />

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="../" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
