@extends('backend.layouts.main')

@section('title', 'Admin')

@extends('backend.layouts.pivot',
    [
        'headers' => $headers,
        'datos' => $materias,
        'titulo' => 'MATERIAS',
        'primaryKey' => 'materia_id'
    ])
