<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\CasasRegistradas;
use Illuminate\Validation\ValidationException;
use App\Models\Corte;

class AuthController extends Controller
{


    public function register()
    {
        return view('auth.register');
    }


    public function login()
    {
        return view('login');
    }


    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:mongodb.usuarios',
            'address' => 'required',
            'alias' => 'required',
            'postal_code' => 'required',
            'password' => 'required|min:6',
            'role' => 'required|in:cliente,administrador',
        ]);

        $usuario = new Usuario;
        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->email = $request->email;
        $usuario->address = $request->address;
        $usuario->alias = $request->alias;
        $usuario->postal_code = $request->postal_code;
        $usuario->password = Hash::make($request->password);
        $usuario->role = $request->role;
        // Asignar los demás campos
        $usuario->save();

        // Almacenar un mensaje flash en la sesión
        session()->flash('status', 'Registro exitoso!');

        // Devolver los datos del usuario y el mensaje de éxito
        return response()->json([
            'status' => 'Registro exitoso!',
            'user' => $usuario
        ]);
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            // Redirigir según el rol del usuario
            $user = Auth::guard('web')->user();
            if ($user->role == 'administrador') {
                return redirect()->intended('auth/admin');
            } else {
                return redirect()->intended('auth/usuario');
            }
        }

        throw ValidationException::withMessages([
            'email' => ['Las credenciales proporcionadas no coinciden con nuestros registros.'],
        ]);
    }

    public function postRegisterHouse(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'alias' => 'required|exists:mongodb.usuarios,alias',
        ]);

        $casa = new CasasRegistradas;
        $casa->nombre = $request->nombre;
        $casa->direccion = $request->direccion;
        $casa->alias = $request->alias;
        $casa->save();

        // Almacenar un mensaje flash en la sesión
        session()->flash('status', 'Registro de casa exitoso!');

        // Devolver los datos de la casa y el mensaje de éxito
        return response()->json([
            'status' => 'Registro de casa exitoso!',
            'casa' => $casa
        ]);
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function deleteUser($id)
    {
        $usuario = Usuario::find($id); // Encuentra al usuario por su id

        if ($usuario) {
            $usuario->delete(); // Elimina al usuario
            return redirect()->route('table')->with('success', 'Usuario eliminado exitosamente');
        } else {
            return redirect()->route('table')->with('error', 'Usuario no encontrado');
        }
    }

    public function editUser($id)
    {
        $usuario = Usuario::find($id); // Encuentra al usuario por su id

        if ($usuario) {
            // Aquí puedes redirigir a una vista de edición con el usuario como parámetro
            return view('auth.edit', ['usuario' => $usuario]);
        } else {
            return redirect()->route('table')->with('error', 'Usuario no encontrado');
        }
    }

    public function updateUser(Request $request, $id)
    {
        $usuario = Usuario::find($id); // Encuentra al usuario por su id

        if ($usuario) {
            // Actualiza los datos del usuario
            $usuario->name = $request->name;
            $usuario->surname = $request->surname;
            $usuario->email = $request->email;
            $usuario->address = $request->address;
            $usuario->alias = $request->alias;
            $usuario->postal_code = $request->postal_code;
            $usuario->role = $request->role;
            $usuario->save();

            return redirect()->route('table')->with('success', 'Usuario actualizado exitosamente');
        } else {
            return redirect()->route('table')->with('error', 'Usuario no encontrado');
        }
    }

    public function getUsersAndHouses()
    {
        $usuarios = Usuario::with('casas')->get(['name', 'alias']); // Obtiene todos los usuarios con sus casas

        return view('auth.tablausuarioscasas', ['usuarios' => $usuarios]); // Devuelve una vista con los usuarios y sus casas
    }

    //funcion para recoger los datos del usuario que tenga una sesion activa de la collecion "usuarios"
    public function getUsers()
    {
        $usuarios = Usuario::all(['name', 'surname', 'email', 'address', 'alias', 'postal_code', 'role']); // Obtiene todos los usuarios sin las contraseñas ni las fechas de creación y actualización

        return view('auth.tablausuarios', ['usuarios' => $usuarios]); // Devuelve una vista con los usuarios
    }

    /*
    funcion para recoger los registro de la colección "Corte" sque pertenezcan al usuario que esté registrado validandose a traves del alias
    para graficar unicamente los datos de dicho usuario
    */
    public function getUserChartData()
    {
        $usuarioActual = Auth::user(); // Obtiene el usuario actual

        // Obtiene solo los cortes que coinciden con el alias del usuario actual
        $cortes = Corte::where('alias', $usuarioActual->alias)->orderBy('fecha', 'asc')->get();

        // Crea un objeto para cada corte con 'vivienda', 'litros' y 'fecha'
        $data = $cortes->map(function ($corte) {
            return [
                'vivienda' => 'Vivienda ' . $corte->vivienda,
                'litros' => $corte->litros,
                'fecha' => $corte->fecha, // Asegúrate de que 'fecha' es un campo en tu modelo Corte
            ];
        });

        return response()->json($data);
    }


    //Funcion para recoger todos los registros de la coleccion "Corte" para hacer una grafica con los datos de todos los usuarios
    public function getChartData()
    {
        $cortes = Corte::orderBy('fecha', 'asc')->get();

        // Crea un objeto para cada corte con 'vivienda', 'litros' y 'fecha'
        $data = $cortes->map(function ($corte) {
            return [
                'vivienda' => 'Vivienda ' . $corte->vivienda,
                'litros' => $corte->litros,
                'fecha' => $corte->fecha, // Asegúrate de que 'fecha' es un campo en tu modelo Corte
            ];
        });

        return response()->json($data);
    }
}
