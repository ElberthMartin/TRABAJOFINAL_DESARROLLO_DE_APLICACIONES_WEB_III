<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener los usuarios reservados
        $usuariosReservados = User::where('reservado', true)->get();

        // Verificar si hay usuarios reservados y asegurarse de que no sea null
        if ($usuariosReservados !== null) {
            // Si no es null, pasar la variable $usuariosReservados a la vista
            return view('dashboard', ['usuariosReservados' => $usuariosReservados]);
        } else {
            // Si es null o está vacío, puedes manejarlo de manera adecuada,
            // por ejemplo, mostrando un mensaje o redirigiendo.
            return view('dashboard.empty'); // Puedes crear una vista para mostrar un mensaje de "Sin usuarios reservados".
        }
    }
}
