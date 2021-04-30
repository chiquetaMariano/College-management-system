<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'profesores';

    protected $primaryKey = 'profesor_id';

    // public function esPresidente()
    // {
    //     return $this->hasMany('App\Models\Examen', 'presidente');
    // }
    //
    // public function esPrimerVocal()
    // {
    //     return $this->hasMany('App\Models\Examen', 'vocal_1');
    // }
    //
    // public function esSegundoVocal()
    // {
    //     return $this->hasMany('App\Models\Examen', 'vocal_2');
    // }
}
