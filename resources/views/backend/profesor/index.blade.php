@extends('backend.layouts.main')

@section('title', 'Admin')

@extends('backend.layouts.table',
    [
        'headers' => $headers,
        'datos' => $profesores,
        'titulo' => 'PROFESORES',
        'primaryKey' => 'profesor_id'
    ])
