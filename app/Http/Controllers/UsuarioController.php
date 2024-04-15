<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function register(Request $request)
    {
        $user = new Usuario;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Almacenar un mensaje flash en la sesión
        session()->flash('status', 'Registro exitoso!');

        return response()->json($user);
    }

    public function login(Request $request)
    {
        $user = Usuario::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Credenciales inválidas'], 401);
        }

        // Almacenar un mensaje flash en la sesión
        session()->flash('status', 'Inicio de sesión exitoso!');

        // Redirigir a la vista admin
        return view('admin');
    }

    public function show($id)
    {
        $user = Usuario::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = Usuario::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = Usuario::find($id);
        $user->delete();
        return response()->json('User removed successfully');
    }
}
