<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Sede;

class SedeController extends Controller
{
    public function index(){
        $sedes = Sede::all();
        $headers = ['Nombre', 'Calle', 'Altura'];
        return view('backend.sede.index', ['sedes' => $sedes, 'headers' => $headers, 'seccion' => 'sede']);
    }
}
