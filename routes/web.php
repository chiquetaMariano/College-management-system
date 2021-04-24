<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// BACKEND
Route::namespace('Backend')->name('backend.')->prefix('/backend')->group(function () {

    // RUTAS RESOURCE
    Route::resource('sede', 'SedeController');
    Route::resource('carrera', 'CarreraController');
    Route::resource('division', 'DivisionController');
    Route::resource('llamado', 'LlamadoController');
    Route::resource('materia', 'MateriaController');
    Route::resource('profesor', 'ProfesorController');

});
