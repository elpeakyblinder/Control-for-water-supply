<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConexionBomba extends Controller
{
    public function toggle(Request $request)
    {
        $status = $request->input('status'); // Esto será 1 o 0
        exec("node js/mqtt_script.js $status");
    }
}
