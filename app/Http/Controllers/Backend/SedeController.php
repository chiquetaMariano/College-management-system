<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Sede;

class SedeController extends Controller
{
    public function index()
    {
        $sedes = Sede::all();
        $headers = ['Nombre', 'Calle', 'Altura'];
        return view('backend.sede.index', ['sedes' => $sedes, 'headers' => $headers, 'seccion' => 'sede']);
    }

    public function store(\Illuminate\Http\Request $request)
    {
        // $validatedData = $request->validate(Sede::getRules());

        $sede = new Sede();

        $sede = $this->bindData($sede, $request);

        $sede->save();

        return redirect(route('backend.sede.index'));
    }

    public function create()
    {
        return view('backend.sede.create');
    }

    public function edit($id)
    {
        $sede = Sede::findOrFail($id);
        return view('backend.sede.edit', ['sede' => $sede]);
    }

    public function update(\Illuminate\Http\Request $request, $sede_id)
    {
        $sede = Sede::findOrFail($sede_id);

        $sede = $this->bindData($sede, $request);

        $sede->save();

        return redirect(route('backend.sede.index'));
    }

    public function destroy($id)
    {
        Sede::destroy($id);
        
        return redirect(route('backend.sede.index'));
    }

    private function bindData(Sede $sede, \Illuminate\Http\Request $request)
    {
        $sede->sede_dn = $request->input('descripcion');
        $sede->sede_dire_calle = $request->input('calle');
        $sede->sede_dire_altura = $request->input('altura');

        return $sede;
    }
}
