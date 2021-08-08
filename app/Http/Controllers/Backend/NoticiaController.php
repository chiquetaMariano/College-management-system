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
        $noticias = Noticia::All();

        $headers = ['Carrera','Curso', 'Título', 'Fecha'];
        return view('backend.noticia.index', ['noticias' => $noticias, 'headers' => $headers, 'seccion' => 'noticia']);
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
        $noticia = Noticia::findOrFail($id);
        $carreras = Carrera::All();
        $anios = Anio::All();
        return view('backend.noticia.edit', 
        [
            'noticia' => $noticia,
            'carreras' => $carreras,
            'anios' => $anios
        ]);
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
