@extends('backend.layouts.main')

@section('title', 'Noticia | Nuevo')

@section('content')
<h2>Editar Noticia</h2>

<form class="form" action="{{ route('backend.user.update', $usuario->id) }}" method="post">
    <div class="form-group">
        <label for="nombre">ID</label>
        <input type="text" class="form-control" value="{{ $usuario->id }}" name="user_id" disabled/>
    </div>
    
    <div class="form-group">
      <label for="name">Usuario</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}" required autofocus>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $usuario->email }}" required>
    </div>

    <input type="hidden" name="_method" value="PUT" />

    <div class="text-center">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/backend/usuario" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection
