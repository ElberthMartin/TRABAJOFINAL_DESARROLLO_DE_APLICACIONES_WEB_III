<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    // Método para mostrar el formulario de reserva
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'correo' => 'required|email',
            'dni' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|string',
            'fecha_llegada' => 'required|date',
            'fecha_salida' => 'required|date',
            'habitacion' => 'required|string',
            'lugar_viaje' => 'required|string',
        ]);
    
        // Crear una nueva reserva y guardarla en la base de datos
        $reserva = new Reserva([
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'dni' => $request->input('dni'),
            'apellido' => $request->input('apellido'),
            'telefono' => $request->input('telefono'),
            'fecha_llegada' => $request->input('fecha_llegada'),
            'fecha_salida' => $request->input('fecha_salida'),
            'habitacion' => $request->input('habitacion'),
            'lugar_viaje' => $request->input('lugar_viaje'),
        ]);
    
        $reserva->save();
    
    
    }
}    