<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<body>
    <h1>Bienvenido a City Tours</h1>
    <p>Esta es la página principal de City Tours.</p>
    <ul>
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
        <li><a href="{{ route('reservar') }}">Reservar</a></li>
        <li><a href="{{ route('admin') }}">Admin</a></li>
    </ul>
</body>
</html>
