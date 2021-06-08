<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        $headers = ['Apellido', 'Nombre'];
        return view('backend.profesor.index', ['profesores' => $profesores, 'headers' => $headers, 'seccion' => 'profesor']);
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $profesor = new Profesor();

        $profesor = $this->bindData($profesor, $request);

        $profesor->save();

        return redirect(route('backend.profesor.index'));
    }

    public function create()
    {
        return view('backend.profesor.create');
    }

    public function edit($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('backend.profesor.edit', ['profesor' => $profesor]);
    }

    public function update(\Illuminate\Http\Request $request, $profesor_id)
    {
        $profesor = Profesor::findOrFail($profesor_id);

        $profesor = $this->bindData($profesor, $request);

        $profesor->save();

        return redirect(route('backend.profesor.index'));
    }

    public function destroy($id)
    {
        Profesor::destroy($id);

        return redirect(route('backend.profesor.index'));
    }

    private function bindData(Profesor $profesor, \Illuminate\Http\Request $request)
    {
        $profesor->profesor_nombre = $request->input('nombre');
        $profesor->profesor_apellido = $request->input('apellido');

        return $profesor;
    }
}
