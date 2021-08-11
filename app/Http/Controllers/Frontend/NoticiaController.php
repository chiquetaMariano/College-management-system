<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Carrera;

class NoticiaController extends Controller
{
    public function index()
    {
      $noticias = Noticia::visibles()->paginate(10);
      $carreras = Carrera::all();
      return view('frontend.noticia.index', ['noticias' =>
    $noticias, 'carreras' => $carreras]);
    }

    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);

        return view('frontend.noticia.show', 
        [
            'noticia' => $noticia
        ]);
    }

    public function porCarrera(\Illuminate\Http\Request $request)
    {
        $carrera_id = $request->input('carrera_id');
        $noticias = Noticia::porCarrera($carrera_id)->where('ocultar', '=', 0)->paginate(10);

        $carreras = Carrera::all();
        return view('frontend.noticia.index', ['noticias' =>
            $noticias, 'carreras' => $carreras]);
      }
}
