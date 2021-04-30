@extends('backend.layouts.main')

@section('title', 'Admin')

@extends('backend.layouts.pivot',
    [
        'headers' => $headers,
        'datos' => $finales,
        'titulo' => 'FINALES',
        'primaryKey' => 'id'
    ])
