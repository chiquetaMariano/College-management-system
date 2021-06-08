<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Anio;
use App\Models\Carrera;
use Illuminate\Support\Facades\DB;

class MateriaController extends Controller
{
    public function index(){
        $materias = DB::table('materias as m')
                        ->join('carreras as c', 'm.carrera_id', '=', 'c.carrera_id')
                        ->join('anios as a', 'm.anio_id', '=', 'a.anio_id')
                        ->select(
                            'm.materia_id',
                            'm.materia_dn',
                            'c.carrera_dn',
                            'a.anio')
                        ->orderBy('m.materia_id')
                        ->get();

        $headers = ['Nombre', 'Carrera', 'Año'];
        return view('backend.materia.index', ['materias' => $materias, 'headers' => $headers, 'seccion' => 'materia']);
    }

    public function create()
    {
        $carreras = Carrera::All();
        $anios = Anio::All();
        return view('backend.materia.create',
        [
            'carreras' => $carreras,
            'anios' => $anios
        ]);
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $materia = new Materia();

        $materia = $this->bindData($materia, $request);

        $materia->save();

        return redirect(route('backend.materia.index'));
    }

    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        $carreras = Carrera::All();
        $anios = Anio::All();
        return view('backend.materia.edit', ['materia' => $materia, 'carreras' => $carreras, 'anios' => $anios]);
    }

    public function update(\Illuminate\Http\Request $request, $materia_id)
    {
        $materia = Materia::findOrFail($materia_id);

        $materia = $this->bindData($materia, $request);

        $materia->save();

        return redirect(route('backend.materia.index'));
    }

    public function destroy($id)
    {
        Materia::destroy($id);

        return redirect(route('backend.materia.index'));
    }

    private function bindData(Materia $materia, \Illuminate\Http\Request $request)
    {
        $materia->materia_dn = $request->input('descripcion');
        $materia->carrera_id = $request->input('carrera');
        $materia->anio_id = $request->input('anio');

        return $materia;
    }
}
