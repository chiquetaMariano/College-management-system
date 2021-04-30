<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Carrera;

class CarreraController extends Controller
{
    public function index(){
        $carreras = Carrera::all();
        $headers = ['Nombre', 'Años', 'Resolución'];
        return view('backend.carrera.index', ['carreras' => $carreras, 'headers' => $headers, 'seccion' => 'carrera']);
    }
}
