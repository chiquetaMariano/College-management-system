<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    public function index(){
        $materias = Materia::all();
        $headers = ['Nombre', 'Carrera', 'Año'];
        return view('backend.materia.index', ['materias' => $materias, 'headers' => $headers, 'seccion' => 'materia']);
    }
}
