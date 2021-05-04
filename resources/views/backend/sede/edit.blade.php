@extends('backend.layouts.main')

@section('title', 'Sede | Nuevo')

@section('content')
<h1>Editar Sede</h1>

<form method="POST" action='{{ route("backend.sede.update", $sede->sede_id) }}'>
    <div class="form-group">
        <label for="nombre">ID</label>
        <input type="text" class="form-control" value="{{ $sede->sede_id }}" name="sede_id" disabled/>
    </div>
    <div class="form-group">
        <label for="descripcion">Nombre</label>
        <input type="text" class="form-control" id="descripcion" value="{{ $sede->sede_dn }}" name="descripcion" />
    </div>
    <div class="form-group">
        <label for="calle">Calle</label>
        <input type="text" class="form-control" id="calle" name="calle" value="{{ $sede->sede_dire_calle }}" required>
    </div>
    <div class="form-group">
        <label for="altura">Altura</label>
        <input type="number" class="form-control" id="altura" name="altura" value="{{ $sede->sede_dire_altura }}" required>
    </div>

    <input type="hidden" name="_method" value="PUT" />

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </div>
</form>
@endsection
