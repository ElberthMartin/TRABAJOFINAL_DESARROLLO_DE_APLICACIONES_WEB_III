<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<div class="login-box">
    <h2>Login</h2>
    <form id="login-form" onsubmit="return validateForm();">
        <div class="user-box">
            <input type="text" name="username" id="username" required>
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" id="password" required>
            <label>Password</label>
        </div>
        <span id="error-message" style="color: red;"></span>
        <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            login
        </button>
    </form>
</div>

<script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if (username === "admin@citytours.pe" && password === "citytours") {
            // Si el correo y la contraseña son correctos, redirige al dashboard
            window.location.href = "/muestra";
            return false; // Evita el envío del formulario
        } else {
            document.getElementById("error-message").innerText = "Correo o contraseña incorrectos.";
            return false; // Evita el envío del formulario
        }
    }
</script>
</body>
</html>
