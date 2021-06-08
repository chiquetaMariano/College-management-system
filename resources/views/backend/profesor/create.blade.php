@extends('backend.layouts.main')

@section('title', 'Profesores | Nuevo')

@section('content')
<h2>Nuevo Profesor</h2>

<form class="form" action="{{ route('backend.profesor.store') }}" method="post">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required autofocus>
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="./" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
