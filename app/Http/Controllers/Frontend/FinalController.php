<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinalController extends Controller
{
    public function index(){
    // $finales = DB::table('finales as f')
    //                 ->select('f.fecha', 'f.materia_id', 'f.vocal_1')
    //                 ->get();

    $finales = DB::table('finales as f')
                    // ->join('sedes as s', 'f.sede_id', '=', 's.sede_id')
                    // ->join('carreras as c', 'f.carrera_id', '=', 'c.carrera_id')
                    // ->join('divisiones as d', 'f.division_id', '=', 'd.division_id')
                    // ->join('anios as a', 'f.anio_id', '=', 'a.anio_id')
                    ->join('materias as m', 'f.materia_id', '=', 'm.materia_id')
                    ->join('profesores as p', 'f.presidente', '=', 'p.profesor_id')
                    ->join('profesores as v1', 'f.vocal_1', '=', 'v1.profesor_id')
                    ->join('profesores as v2', 'f.vocal_2', '=', 'v2.profesor_id')
                    // ->join('llamados as l', 'f.llamado_id', '=', 'l.llamado_id')
                    ->select(
                            // 'f.id',
                            'f.fecha',
                            // 's.sede_dn',
                            // 'c.carrera_dn',
                            // 'd.division',
                            // 'a.anio',
                            'm.materia_dn',
                            'p.profesor_apellido as presidente',
                            'v1.profesor_apellido as vocal_1',
                            'v2.profesor_apellido as vocal_2',
                            // 'l.llamado'
                            )
                    ->get();
                    // ->where('id', '=', $id)


        $headers = ['Fecha', 'Asignatura', 'Profesores'];
        return view('frontend.finales.index', ['finales' => $finales, 'headers' => $headers, 'seccion' => 'final']);
    }
}
