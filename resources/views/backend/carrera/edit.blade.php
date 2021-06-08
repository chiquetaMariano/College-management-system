@extends('backend.layouts.main')

@section('title', 'Carrera | Nuevo')

@section('content')
<h1>Editar Carrera</h1>

<form method="POST" action='{{ route("backend.carrera.update", $carrera->carrera_id) }}'>
    <div class="form-group">
        <label for="nombre">ID</label>
        <input type="text" class="form-control" value="{{ $carrera->carrera_id }}" name="carrera_id" disabled/>
    </div>
    <div class="form-group">
        <label for="descripcion">Nombre</label>
        <input type="text" class="form-control" id="descripcion" value="{{ $carrera->carrera_dn }}" name="descripcion" />
    </div>
    <div class="form-group">
        <label for="anios">Años</label>
        <input type="number" class="form-control" id="anios" name="anios" value="{{ $carrera->carrera_anios }}" required>
    </div>
    <div class="form-group">
        <label for="resolucion">Resolución</label>
        <input type="text" class="form-control" id="resolucion" name="resolucion" value="{{ $carrera->carrera_resolucion }}" required>
    </div>

    <input type="hidden" name="_method" value="PUT" />

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="../" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
