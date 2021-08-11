<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::all();
        $headers = ['Nombre', 'Email'];
        return view('backend.user.index', ['usuarios' => $usuarios, 'headers' => $headers, 'seccion' => 'usuarios']);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.edit', 
        [
            'usuario' => $user
        ]);
    }

    public function update(\Illuminate\Http\Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);

        $user = $this->bindData($user, $request);

        $user->save();

        return redirect(route('backend.user.index'));
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect(route('backend.user.index'));
    }

    private function bindData(User $usuario, \Illuminate\Http\Request $request)
    {
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');

        return $usuario;
    }
}
