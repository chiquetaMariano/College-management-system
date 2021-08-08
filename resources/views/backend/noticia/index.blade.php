@extends('backend.layouts.main')

@section('title', 'Admin')

@section('content')
<h4 id="titulo_tabla">Noticias</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><a type="button" class="btn btn-success" href="{{ route("backend.noticia.create") }}">+</a></th>
            <th scope="col">Carrera</th>
            <th scope="col">Curso</th>
            <th scope="col">Título</th>
            <th scope="col">Fecha</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($noticias as $noticia)
        <tr>
            <td>{{ $noticia->id }}</td>
            <td>{{ $noticia->perteneceA->carrera_dn }}</td>
            <td>{{ $noticia->anio_id }}</td>
            <td>{{ $noticia->titulo }}</td>
            <td>{{ $noticia->fecha }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route("backend.noticia.edit", $noticia->id) }}">
                    <img src="/img/edit.png" alt="Editar"/>
                </a>
            </td>
            <td>
                <a class="btn btn-danger deleteBtn"
                onclick="deleteBtn({{ $noticia->id }});"
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

<div id="overlay" onclick="overlayOff();">
     <div id="overlay-content" class="text-center">
         <p>¿Desea eliminar el registro?</p>
         <div class="modal-footer text-center">
            <form method="post" id="frmDelete">
                <input class="btn btn-danger" type="submit" name="submit" value="Confirmar" />
                <input type="hidden" name="_method" value="DELETE" />
                <button type="button" class="btn btn-primary" onclick="overlayOff();">Cancelar</button>
            </form>
         </div>
    </div>
</div>

@endsection

<script>
function overlayOn() {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("overlay-content").style.display = "block";
}

function overlayOff() {
  document.getElementById("overlay").style.display = "none";
  document.getElementById('overlay-content').style.display = "none";
}

function deleteBtn(id) {
    overlayOn();
    let frmDelete = document.getElementById('frmDelete');
    frmDelete.action = '/backend/noticia/' + id;
};
</script>
