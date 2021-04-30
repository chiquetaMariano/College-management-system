<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Llamado;

class LlamadoController extends Controller
{
    public function index(){
        $llamados = Llamado::all();
        $headers = ['Llamado'];
        return view('backend.llamado.index', ['llamados' => $llamados, 'headers' => $headers, 'seccion' => 'llamado']);
    }
}
