@extends('backend.layouts.main')

@section('title', 'Profesores | Editar')

@section('content')
<h1>Editar Profesor</h1>

<form method="POST" action='{{ route("backend.profesor.update", $profesor->profesor_id) }}'>
    <div class="form-group">
        <label for="nombre">ID</label>
        <input type="text" class="form-control" value="{{ $profesor->profesor_id }}" name="profesor_id" disabled/>
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" value="{{ $profesor->profesor_nombre }}" name="nombre" />
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" value="{{ $profesor->profesor_apellido }}" name="apellido" />
    </div>

    <input type="hidden" name="_method" value="PUT" />

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="../" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
