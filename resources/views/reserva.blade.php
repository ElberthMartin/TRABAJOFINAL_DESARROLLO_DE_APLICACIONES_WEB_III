<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('css/reserva.css') }}">
    

</head>
<body style="background-image: url('{{ asset('img/4.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

<h1>Reserva </h1>




    <form action="{{ route('reserva.store') }}" method="post" >
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

    <label for="fecha_llegada">Fecha salida:</label>
    <input type="date" id="fecha_llegada" name="fecha_llegada" required><br>

    <label for="fecha_salida">Fecha de reservacion</label>
    <input type="date" id="fecha_salida" name="fecha_salida" required><br>

    <label for="habitacion">Tipo de movilidad</label>
    <select id="habitacion" name="habitacion">
        <option value="individual">BUS</option>
        <option value="doble">MINIVAN</option>
        <option value="suite">AUTO</option>
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
