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
}
