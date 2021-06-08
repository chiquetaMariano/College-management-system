@extends('backend.layouts.main')

@section('title', 'Carrera | Nuevo')

@section('content')
<h2>Nueva Carrera</h2>

<form class="form" action="{{ route('backend.carrera.store') }}" method="post">
    <div class="form-group">
      <label for="descripcion">Nombre</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" required autofocus>
    </div>
    <div class="form-group">
        <label for="anios">Años</label>
        <input type="number" class="form-control" id="anios" name="anios" required>
    </div>
    <div class="form-group">
        <label for="resolución">Resolución</label>
        <input type="text" class="form-control" id="resolución" name="resolución" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="./" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
