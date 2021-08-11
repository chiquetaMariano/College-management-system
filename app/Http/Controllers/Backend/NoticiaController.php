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

    // public function show($id)
    // {
    //     $noticia = Noticia::findOrFail($id);

    //     return view('backend.noticia.show', 
    //     [
    //         'noticia' => $noticia
    //     ]);
    // }

    public function store(\Illuminate\Http\Request $request)
    {
        $noticia = new Noticia();

        $noticia = $this->bindData($noticia, $request);

        // // Procesar archivo de imagen, si existe
        // if($request->hasFile('adjunto')) {
        //     $adjunto = $request->file('adjunto');
        //     $path = $adjunto->storeAs('public/noticias', time() . $adjunto->getClientOriginalName());
        //     $savedPath = str_replace('public/', '', $path);
        //     $noticia->adjunto = $savedPath;
        // }

        $noticia->save();

        return redirect(route('backend.noticia.index'));
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
        $noticia = Noticia::findOrFail($noticia_id);

        $noticia = $this->bindData($noticia, $request);

        $noticia->save();

        return redirect(route('backend.noticia.index'));
    }

    public function destroy($id)
    {
        Noticia::destroy($id);

        return redirect(route('backend.noticia.index'));
    }

    private function bindData(Noticia $noticia, \Illuminate\Http\Request $request)
    {
        $noticia->titulo = $request->input('titulo');
        $noticia->cuerpo = $request->input('cuerpo');
        $noticia->carrera_id = $request->input('carrera');
        $noticia->anio_id = $request->input('anio');
        $noticia->ocultar = ($request->input('oculta') === 'on') ? 1 : 0;
        $noticia->fecha = $request->input('fecha');

        // Procesar archivo de imagen, si existe
        if($request->hasFile('adjunto')) {
            $adjunto = $request->file('adjunto');
            $path = $adjunto->storeAs('public/noticias', time() . $adjunto->getClientOriginalName());
            $savedPath = str_replace('public/', '', $path);
            $noticia->adjunto = $savedPath;
        }        

        return $noticia;
    }
}
