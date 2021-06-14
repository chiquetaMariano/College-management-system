<?php

use Illuminate\Support\Facades\Route;

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

// FRONTEND
Route::namespace('Frontend')->name('frontend.')->prefix('/')->group(function() {

    Route::redirect('/', '/home', 301);

    Route::get('home', 'FinalController@home');
    Route::post('finales', 'FinalController@show')->name('finales');
    Route::get('debug', 'FinalController@index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
