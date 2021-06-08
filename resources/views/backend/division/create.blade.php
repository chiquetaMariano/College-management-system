@extends('backend.layouts.main')

@section('title', 'División | Nuevo')

@section('content')
<h2>Nueva División</h2>

<form class="form" action="{{ route('backend.division.store') }}" method="post">
    <div class="form-group">
      <label for="division">División</label>
      <input type="text" class="form-control" id="division" name="division" required autofocus>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="./" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
