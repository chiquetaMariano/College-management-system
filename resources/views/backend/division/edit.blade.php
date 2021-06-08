@extends('backend.layouts.main')

@section('title', 'División | Nuevo')

@section('content')
<h1>Editar División</h1>

<form method="POST" action='{{ route("backend.division.update", $division->division_id) }}'>
    <div class="form-group">
        <label for="nombre">ID</label>
        <input type="text" class="form-control" value="{{ $division->division_id }}" name="division_id" disabled/>
    </div>
    <div class="form-group">
        <label for="division">División</label>
        <input type="text" class="form-control" id="division" value="{{ $division->division }}" name="division" />
    </div>

    <input type="hidden" name="_method" value="PUT" />

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="../" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
