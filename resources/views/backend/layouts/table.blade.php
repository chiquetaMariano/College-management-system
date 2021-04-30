@section('content')
<h4 id="titulo_tabla">{{ $titulo }}</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><a type="button" class="btn btn-success" href="{{ route("backend.$seccion.create") }}">+</a></th>
            @foreach($headers as $header)
            <th scope="col">{{ $header }}</th>
            @endforeach
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($datos as $item)
        <tr>
            <?php
            // Iteramos sobre los atributos del objeto
            foreach ($item->getAttributes() as $key => $value) {
                // descartamos los timestamps
                if($key !== 'created_at' && $key !== 'updated_at')
                {
                    echo "<td>$value</td>";
                }
            } ?>
            <td>
                <a class="btn btn-primary" href="{{ route("backend.$seccion.edit", $item->getAttribute($primaryKey)) }}">
                    <img src="/img/edit.png" alt="Editar"/>
                </a>
            </td>
            <td>
                <a class="btn btn-danger deleteBtn"
                onclick="deleteBtn({{ $item->getAttribute($primaryKey) }});"
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
        window.location.replace("/backend/{{$seccion}}/delete/"+ id);
    } else {
        console.log('canceled');
    }
};
</script>
