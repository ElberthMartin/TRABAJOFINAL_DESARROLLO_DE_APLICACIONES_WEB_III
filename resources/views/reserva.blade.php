<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Hotel</title>
</head>
<body>
    <h1>Reserva de Hotel</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('reserva.store') }}" method="post">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required><br>

    <label for="dni">DNI:</label>
    <input type="text" id="dni" name="dni" required><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required><br>

    <label for="fecha_llegada">Fecha de llegada:</label>
    <input type="date" id="fecha_llegada" name="fecha_llegada" required><br>

    <label for="fecha_salida">Fecha de salida:</label>
    <input type="date" id="fecha_salida" name="fecha_salida" required><br>

    <label for="habitacion">Tipo de habitación:</label>
    <select id="habitacion" name="habitacion">
        <option value="individual">Individual</option>
        <option value="doble">Doble</option>
        <option value="suite">Suite</option>
    </select><br>

    <label for="lugar_viaje">Lugar de Viaje:</label>
    <select id="lugar_viaje" name="lugar_viaje">
        <option value="Cueva de las Lechuzas">Cueva de las Lechuzas</option>
        <option value="Pichgacocha">Pichgacocha</option>
        <option value="Corona del Inca">Corona del Inca</option>
    </select><br>

    <input type="submit" value="Reservar">
</form>

</body>
</html>
