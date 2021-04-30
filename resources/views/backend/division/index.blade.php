@extends('backend.layouts.main')

@section('title', 'Admin')

@extends('backend.layouts.table',
    [
        'headers' => $headers,
        'datos' => $divisiones,
        'titulo' => 'DIVISIONES',
        'primaryKey' => 'division_id'
    ])
