@extends('backend.layouts.main')

@section('title', 'Admin')

@extends('backend.layouts.table',
    [
        'headers' => $headers,
        'datos' => $llamados,
        'titulo' => 'LLAMADOS',
        'primaryKey' => 'llamado_id'
    ])
