<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        $headers = ['Nombre', 'Apellido'];
        return view('backend.profesor.index', ['profesores' => $profesores, 'headers' => $headers, 'seccion' => 'profesor']);
    }
}
