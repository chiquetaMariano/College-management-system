@extends('backend.layouts.main')

@section('title', 'Admin')

@extends('backend.layouts.table',
    [
        'headers' => $headers,
        'datos' => $carreras,
        'titulo' => 'CARRERAS',
        'primaryKey' => 'carrera_id'
    ])
