@section('content')
<h4 id="titulo_tabla">{{ $titulo }}</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><a type="button" class="btn btn-success" href="{{ route("backend.$seccion.create") }}">+</a></th>
            @foreach($headers as $header)
            <th scope="col">{{ $header }}</th>
            @endforeach
            <th scope="col">Ver Detalle</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($datos as $item)
        <tr>
            <?php
            // Iteramos sobre los atributos del objeto
            foreach ($item as $key => $value) {
                // descartamos los timestamps
                if($key !== 'created_at' && $key !== 'updated_at')
                {
                    echo "<td>$value</td>";
                }
            } ?>
            <td>
                <a class="btn btn-success" href="#" onclick="getRequest({{$item->$primaryKey}});">
                    <img src="/img/edit.png" alt="Ver detalle"/>
                </a>
            </td>
            <td>
                <a class="btn btn-primary" href="{{ route("backend.$seccion.edit", $item->$primaryKey) }}">
                    <img src="/img/edit.png" alt="Editar"/>
                </a>
            </td>
            <td>
                <a class="btn btn-danger deleteBtn"
                onclick="deleteBtn({{$item->$primaryKey}});">
                    <img src="/img/trash-can.png" alt="Eliminar"/>
                </a>
            </td>
        </tr>
    @empty
        <p>No hay datos para mostrar</p>
    @endforelse
    </tbody>
</table>

<div id="overlay" onclick="off();">
    <div class="spinner">
        <img src="/img/loading.gif" alt="cargando..." width="50px">
    </div>
     <div id="overlay-content">
         <h5>Info</h5>
         <p>ID: <span></span></p>
         <p>Fecha: <span></span></p>
         <p>Sede: <span></span></p>
         <p>Carrera: <span></span></p>
         <p>División: <span></span></p>
         <p>Año: <span></span></p>
         <p>Materia: <span></span></p>
         <p>Presidente: <span></span></p>
         <p>1er vocal: <span></span></p>
         <p>2do vocal: <span></span></p>
         <p>Llamado: <span></span></p>
     <a class="btn btn-primary" href="#">OK</a>
    </div>
</div>
@endsection

<script>
function deleteBtn(id) {
    let r = confirm('¿Está seguro de eliminar este registro?');
    if(r){
        window.location.replace("/backend/{{$seccion}}/delete/"+ id);
    } else {
        console.log('canceled');
    }
};

function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
  document.getElementById('overlay-content').style.display = "none";
}

function getRequest(id)
{
    on();
    document.querySelector('.spinner').style.display = "block";
    fetch('http://vm.development.com/api/finales/'+id)
        .then(response => response.json())
        .then(data => adjuntarDatos(data[0]));
}

function adjuntarDatos(data)
{
    let overlayContent = document.getElementById('overlay-content');
    let placeholders = overlayContent.querySelectorAll('span');

    info = Object.values(data);

    placeholders.forEach((item, i) => {
        item.innerHTML = info[i];
    });

    // Ocultar spinner y mostrar datos
    document.querySelector('.spinner').style.display = "none";
    overlayContent.style.display = "block";
}
</script>
