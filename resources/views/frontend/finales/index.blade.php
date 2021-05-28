@extends('frontend.layouts.main')

@section('title', 'Finales')

@extends('frontend.layouts.table',
    [
        'headers' => $headers,
        'datos' => $finales,
        'titulo' => 'FINALES',
        'primaryKey' => 'id'
    ])
