<!-- muestra.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Usuarios Reservados</h2>
    @if(count($usuariosReservados) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>DNI</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Fecha de Llegada</th>
                <th>Fecha de Salida</th>
                <th>Habitación</th>
                <th>Lugar de Viaje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuariosReservados as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->correo }}</td>
                <td>{{ $usuario->dni }}</td>
                <td>{{ $usuario->apellido }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->fecha_llegada }}</td>
                <td>{{ $usuario->fecha_salida }}</td>
                <td>{{ $usuario->habitacion }}</td>
                <td>{{ $usuario->lugar_viaje }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No hay usuarios reservados.</p>
    @endif
</div>
@endsection
