<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Anio;
use App\Models\Carrera;

class NoticiaController extends Controller
{
    public function index()
    {
        // 
    }

    public function create()
    {
        $carreras = Carrera::All();
        $anios = Anio::All();
        return view('backend.noticia.create',
        [
            'carreras' => $carreras,
            'anios' => $anios
        ]);
    }

    public function store(\Illuminate\Http\Request $request)
    {
        // 
    }

    public function edit($id)
    {
        // 
    }

    public function update(\Illuminate\Http\Request $request, $noticia_id)
    {
        // 
    }

    public function destroy($id)
    {
        // 
    }

    private function bindData(Noticia $noticia, \Illuminate\Http\Request $request)
    {
        // 
    }
}
