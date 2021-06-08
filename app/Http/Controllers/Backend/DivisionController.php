<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Division;

class DivisionController extends Controller
{
    public function index(){
        $divisiones = Division::all();
        $headers = ['Division'];
        return view('backend.division.index', ['divisiones' => $divisiones, 'headers' => $headers, 'seccion' => 'division']);
    }

    public function create()
    {
        return view('backend.division.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $division = new Division();

        $division = $this->bindData($division, $request);

        $division->save();

        return redirect(route('backend.division.index'));
    }

    public function edit($id)
    {
        $division = Division::findOrFail($id);
        return view('backend.division.edit', ['division' => $division]);
    }

    public function update(\Illuminate\Http\Request $request, $carrera_id)
    {
        $division = Division::findOrFail($carrera_id);

        $division = $this->bindData($division, $request);

        $division->save();

        return redirect(route('backend.division.index'));
    }

    private function bindData(Division $division, \Illuminate\Http\Request $request)
    {
        $division->division = $request->input('division');

        return $division;
    }

    public function destroy($id)
    {
        Division::destroy($id);

        return redirect(route('backend.division.index'));
    }
}
