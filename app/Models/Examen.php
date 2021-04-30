<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $table  = 'finales';

    // public function presidenteDeMesa()
    // {
    //     return $this->belongsTo('App\Models\Profesor', 'presidente');
    // }
    //
    // public function primerVocal()
    // {
    //     return $this->belongsTo('App\Models\Profesor', 'vocal_1');
    // }
    //
    // public function segundoVocal()
    // {
    //     return $this->belongsTo('App\Models\Profesor', 'vocal_2');
    // }

}
