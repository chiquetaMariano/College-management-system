@extends('backend.layouts.main')

@section('title', 'Admin')

@section('content')
<h4>SEDES</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col"><a type="button" class="btn btn-success" href="{{ route("backend.sede.create") }}">+</a></th>
      <th scope="col">Nombre</th>
      <th scope="col">Calle</th>
      <th scope="col">Altura</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($sedes as $sede)
    <tr>
      <th scope="row">{{ $sede->sede_id }}</th>
      <td>{{ $sede->sede_dn }}</td>
      <td>{{ $sede->sede_dire_calle }}</td>
      <td>{{ $sede->sede_dire_altura }}</td>
      <td><a class="btn btn-primary" href="{{ route('backend.sede.edit', $sede->sede_id) }}">
          <img src="/img/edit.png" alt="Editar"/>
      </a></td>
      <td>
          <a class="btn btn-danger deleteBtn"
             onclick="deleteBtn({{ $sede->sede_id }});"
             href="#">
             <img src="/img/trash-can.png" alt="Eliminar"/>
          </a>
      </td>
    </tr>
    @empty
    <p>No hay datos para mostrar</p>
    @endforelse
  </tbody>
</table>
@endsection

<script>
function deleteBtn(id) {
        let r = confirm('¿Está seguro de eliminar este registro?');
        if(r){
            // window.location.replace("/backend/sede/delete/"+ id);
            console.log("/backend/sede/delete/"+ id);
        } else {
            console.log('canceled');
        }
};
</script>
