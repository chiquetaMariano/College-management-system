<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    public function perteneceA()
    {
        return $this->belongsTo('\App\Models\Carrera', 'carrera_id');
    }

    public static function visibles()
    {
        return Noticia::where('ocultar', '=', 0);
    }

    public static function porCarrera($carrera_id)
    {
        return Noticia::where('carrera_id', '=', $carrera_id);
    }
}
