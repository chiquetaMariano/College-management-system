@extends('frontend.layouts.main')

@section('title', 'Finales')

@section('content')

@isset($carrera)
<div class="card-body text-center">
    <h3>{{ $carrera }} - {{ $llamado }}</h3>
</div>
@endisset

@foreach($finales as $finales_anio)
@isset($finales_anio[0])
<h4 id="titulo_tabla">Año {{ $finales_anio[0]->anio }}</h4>
<table class="table">
    <thead>
        <tr>
            @foreach($headers as $header)
            <th scope="col">{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    @forelse($finales_anio as $item)
        <tr>
            <td>{{ $item->fecha }}</td>
            <td>{{ $item->materia }}</td>
            <td>{{ $item->presidente }} - {{ $item->vocal_1 }} - {{ $item->vocal_2 }}</td>
        </tr>
    @empty
    <tr>
        <td></td>
        <td><p>No hay datos para mostrar</p></td>
        <td></td>
    </tr>
    @endforelse
    </tbody>
</table>
@endisset
@endforeach


@endsection
