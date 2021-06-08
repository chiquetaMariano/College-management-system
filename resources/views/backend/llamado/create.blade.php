@extends('backend.layouts.main')

@section('title', 'Llamado | Nuevo')

@section('content')
<h2>Nuevo Llamado</h2>

<form class="form" action="{{ route('backend.llamado.store') }}" method="post">

    <div class="form-group">
      <label for="descripcion">Llamado</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" required autofocus>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="./" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
