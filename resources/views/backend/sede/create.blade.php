@extends('backend.layouts.main')

@section('title', 'Sede | Nuevo')

@section('content')
<h2>Nueva Sede</h2>

<form class="form" action="{{ route('backend.sede.store') }}" method="post">
    <div class="form-group">
      <label for="descripcion">Nombre</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" required autofocus>
    </div>
    <div class="form-group">
        <label for="calle">Calle</label>
        <input type="text" class="form-control" id="calle" name="calle" required>
    </div>
    <div class="form-group">
        <label for="altura">Altura</label>
        <input type="number" class="form-control" id="altura" name="altura" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </div>
</form>
@endsection
