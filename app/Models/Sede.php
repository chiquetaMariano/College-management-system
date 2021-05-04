<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    protected $primaryKey = 'sede_id';

    public static function getRules($id = 0)
    {
        // return [
        //     'sede_dn' => 'required|max:70|unique:sedes,sede_dn,'.$id,
        //     'sede_dire_calle' => 'required|max:30',
        //     'sede_dire_altura' => 'required|max:10'
        // ];

    }
}
