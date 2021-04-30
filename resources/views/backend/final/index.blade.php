@extends('backend.layouts.main')

@section('title', 'Admin')

@extends('backend.layouts.table',
    [
        'headers' => $headers,
        'datos' => $finales,
        'titulo' => 'FINALES',
        'primaryKey' => 'id'
    ])
