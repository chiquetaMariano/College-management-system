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

    public function create()
    {
        return view('backend.llamado.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $llamado = new Llamado();

        $llamado = $this->bindData($llamado, $request);

        $llamado->save();

        return redirect(route('backend.llamado.index'));
    }

    public function edit($id)
    {
        $llamado = Llamado::findOrFail($id);
        return view('backend.llamado.edit', ['llamado' => $llamado]);
    }

    public function update(\Illuminate\Http\Request $request, $llamado_id)
    {
        $llamado = Llamado::findOrFail($llamado_id);

        $llamado = $this->bindData($llamado, $request);

        $llamado->save();

        return redirect(route('backend.llamado.index'));
    }

    public function destroy($id)
    {
        Llamado::destroy($id);

        return redirect(route('backend.llamado.index'));
    }

    private function bindData(Llamado $llamado, \Illuminate\Http\Request $request)
    {
        $llamado->llamado = $request->input('descripcion');
        return $llamado;
    }
}
