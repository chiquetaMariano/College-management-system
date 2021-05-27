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
                    <img src="/img/see-details.png" alt="Ver detalle" width="70%"/>
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

<div id="overlay">
    <div class="spinner">
        <img src="/img/loading.gif" alt="cargando..." width="50px">
    </div>
     <div id="overlay-content" class="copy">
        <h5 class="text-center">INFO</h5>
        <textarea rows="11" cols="80" class="info form-control" readonly></textarea>
        <div class="row mt-3">
            <div class="col-md-4 offset-md-5">
                <a class="btn btn-primary" href="#"  onclick="off();">OK</a>
                <button class="btn btn-outline-primary" type="button" onclick="copy();">Copiar</button>
            </div>
            <div class="col-md-2 offset-md-1">
                <p id="copiado" style="color: #F00; font-size: 13px;">¡Copiado!</p>
            </div>
        </div>
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
  document.querySelector('#copiado').style.visibility = "hidden";
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
    let placeholder = document.querySelector('.info');

    // Cargar datos en el textarea
    placeholder.innerHTML = "";

    placeholder.innerHTML = `ID: ${data.id}
Fecha: ${data.fecha}
Sede: ${data.sede_dn}
Carrera: ${data.carrera_dn}
División: ${data.division}
Año: ${data.anio}
Materia: ${data.materia_dn}
Presidente: ${data.presidente}
1er Vocal: ${data.vocal_1}
2do Vocal: ${data.vocal_2}
Llamado: ${data.llamado}`;

    // Ocultar spinner y mostrar datos
    document.querySelector('.spinner').style.display = "none";
    overlayContent.style.display = "block";
}

function copy(){
    var info = document.querySelector('.info');
    info.select();
    document.execCommand('copy');
    document.querySelector('#copiado').style.visibility = "visible";
    setTimeout(function () {
        document.querySelector('#copiado').style.visibility = "hidden";
    }, 1000);
}

window.onload = function() {
    document.querySelector(".info").addEventListener("click", copy);
}

</script>
