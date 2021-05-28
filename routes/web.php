<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// BACKEND
Route::namespace('Backend')->name('backend.')->prefix('/backend')->group(function () {

    Route::redirect('/', '/backend/home', 301);

    // Vista de inicio para backend
    Route::get('/home', function() {
        return view('backend.home');
    });

    // RUTAS RESOURCE
    Route::resource('sede', 'SedeController');
    Route::resource('carrera', 'CarreraController');
    Route::resource('division', 'DivisionController');
    Route::resource('llamado', 'LlamadoController');
    Route::resource('materia', 'MateriaController');
    Route::resource('profesor', 'ProfesorController');
    Route::resource('final', 'FinalController');

});

Route::namespace('Frontend')->name('frontend.')->prefix('/')->group(function() {

    // TODO: assign controller
    Route::redirect('/', '/home', 301);

    Route::get('home', 'FinalController@index');
    // Route::get('home', function() {
    //     return view('frontend.finales.index');
    // });
});
