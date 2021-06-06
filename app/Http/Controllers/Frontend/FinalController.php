<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sede;
use App\Models\Carrera;
use App\Models\Division;
use App\Models\Llamado;
use App\Models\Anio;
use App\Models\Materia;

class FinalController extends Controller
{
    public function show(\Illuminate\Http\Request $request)
    {
        $data = array(
            array(),
            array(),
            array()
        );

        $sede = $request->input('sede');
        $carrera = $request->input('carrera');
        $division = $request->input('division');
        $llamado = $request->input('llamado');

        $finales = DB::table('finales as f')
                        ->join('carreras as c', 'f.carrera_id', '=', 'c.carrera_id')
                        ->join('divisiones as d', 'f.division_id', '=', 'd.division_id')
                        ->join('anios as a', 'f.anio_id', '=', 'a.anio_id')
                        ->join('materias as m', 'f.materia_id', '=', 'm.materia_id')
                        ->join('profesores as p', 'f.presidente', '=', 'p.profesor_id')
                        ->join('profesores as v1', 'f.vocal_1', '=', 'v1.profesor_id')
                        ->join('profesores as v2', 'f.vocal_2', '=', 'v2.profesor_id')
                        ->join('llamados as l', 'f.llamado_id', '=', 'l.llamado_id')
                        ->select(
                                'f.fecha',
                                'c.carrera_dn as carrera',
                                'd.division',
                                'a.anio',
                                'm.materia_dn as materia',
                                'p.profesor_apellido as presidente',
                                'v1.profesor_apellido as vocal_1',
                                'v2.profesor_apellido as vocal_2',
                                'l.llamado'
                                )
                        ->where('f.sede_id', '=', $sede)
                        ->where('f.carrera_id', '=', $carrera)
                        ->where('f.division_id', '=', $division)
                        ->where('f.llamado_id', '=', $llamado)
                        ->get();

        // organizar los finales en tablas según el año
        for($i=0; $i < count($finales); $i++)
        {
            // agregar final a la tabla correspondiente
            switch ($finales[$i]->anio) {
                case 1:
                    array_push($data[0], $finales[$i]);
                    break;
                case 2:
                    array_push($data[1], $finales[$i]);
                    break;
                case 3:
                    array_push($data[2], $finales[$i]);
                    break;

                default:
                    // TODO: return error
                    break;
            }
        }

        if(isset($finales[0]))
        {
            $carrera = $finales[0]->carrera;
            $llamado = 'Llamado ' . $finales[0]->llamado;
        } else {
            $carrera = '- No hay información disponible';
            $llamado = '';
        }

        $headers = ['Fecha', 'Asignatura', 'Profesores'];
        return view('frontend.final.index',
        [
            'finales' => $data,
            'headers' => $headers,
            'seccion' => 'final',
            'carrera' => $carrera,
            'llamado' => $llamado
        ]);
    }

    public function home()
    {
        $sedes = Sede::all();
        $carreras = Carrera::all();
        $divisiones = Division::all();
        $llamados = Llamado::all();
        $anios = Anio::all();
        $materias = Materia::all();

        return view('frontend.final.filter', [
            'sedes' => $sedes,
            'carreras' => $carreras,
            'divisiones' => $divisiones,
            'llamados' => $llamados,
            'anios' => $anios,
            'materias' => $materias
        ]);
    }
}
