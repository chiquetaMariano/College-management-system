<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
      $noticias = Noticia::paginate(10);
      return view('frontend.noticia.index', ['noticias' =>
    $noticias]);
    }
}
