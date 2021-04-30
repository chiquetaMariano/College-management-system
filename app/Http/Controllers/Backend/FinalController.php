<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Examen;
use Illuminate\Support\Facades\DB;

class FinalController extends Controller
{
    public function index(){
        $finales = DB::table('finales as f')
                        ->select('f.id', 'f.fecha')
                        ->get();

        $headers = ['Fecha'];
        // $headers = ['Fecha', 'Sede', 'Carrera', 'División', 'Año', 'Materia', 'Presidente', 'Vocal 1', 'Vocal 2', 'Llamado'];
        return view('backend.final.index', ['finales' => $finales, 'headers' => $headers, 'seccion' => 'final']);
    }
}
