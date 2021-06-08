<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Carrera;

class CarreraController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();
        $headers = ['Nombre', 'Años', 'Resolución'];
        return view('backend.carrera.index', ['carreras' => $carreras, 'headers' => $headers, 'seccion' => 'carrera']);
    }

    public function create()
    {
        return view('backend.carrera.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $carrera = new Carrera();

        $carrera = $this->bindData($carrera, $request);

        $carrera->save();

        return redirect(route('backend.carrera.index'));
    }

    public function edit($id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('backend.carrera.edit', ['carrera' => $carrera]);
    }

    public function update(\Illuminate\Http\Request $request, $carrera_id)
    {
        $carrera = Carrera::findOrFail($carrera_id);

        $carrera = $this->bindData($carrera, $request);

        $carrera->save();

        return redirect(route('backend.carrera.index'));
    }

    private function bindData(Carrera $carrera, \Illuminate\Http\Request $request)
    {
        $carrera->carrera_dn = $request->input('descripcion');
        $carrera->carrera_anios = $request->input('anios');
        $carrera->carrera_resolucion = $request->input('resolucion');

        return $carrera;
    }

    public function destroy($id)
    {
        Carrera::destroy($id);

        return redirect(route('backend.carrera.index'));
    }
}
