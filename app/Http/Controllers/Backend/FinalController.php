<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Examen;
use Illuminate\Support\Facades\DB;

use App\Models\Sede;
use App\Models\Carrera;
use App\Models\Division;
use App\Models\Anio;
use App\Models\Materia;
use App\Models\Profesor;
use App\Models\Llamado;

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

    public function create()
    {
        $sedes = Sede::all();
        $profesores = Profesor::all();
        $materias = Materia::all();
        $divisiones = Division::all();
        $carreras = Carrera::All();
        $anios = Anio::All();
        $llamados = Llamado::All();

        return view('backend.final.create',[
            'sedes' => $sedes,
            'profesores' => $profesores,
            'materias' => $materias,
            'divisiones' => $divisiones,
            'carreras' => $carreras,
            'anios' => $anios,
            'profesores' => $profesores,
            'llamados' => $llamados
        ]);
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $final = new Examen();

        $final = $this->bindData($final, $request);

        $final->save();

        return redirect(route('backend.final.index'));
    }

    private function bindData(Examen $final, \Illuminate\Http\Request $request)
    {
        $final->sede_id = $request->input('sede');
        $final->carrera_id = $request->input('carrera');
        $final->anio_id = $request->input('anio');
        $final->division_id = $request->input('division');
        $final->materia_id = $request->input('materia');
        $final->presidente = $request->input('presidente');
        $final->vocal_1 = $request->input('vocal_1');
        $final->vocal_2 = $request->input('vocal_2');
        $final->llamado_id = $request->input('llamado');
        $final->fecha = $request->input('fecha');

        return $final;
    }
}
