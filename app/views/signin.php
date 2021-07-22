<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link rel="stylesheet" href="../views/css/loginStyle.css">
</head>
<body>
    <div class="container">
        <h1>Registar nuevo usuario</h1>
        <span class="alert" id='alert'></span>
        <form action="" id="signIn">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Ingresa tu nombre">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastname" id="lastname" placeholder="Ingresa tu apellido">
            <label for="username">Nombre de usuario</label>
            <input type="text" name="username" id="username" placeholder="Ingresa tu nombre de usuario">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña">
            <label for="confirmPassword">Confirmar contraseña</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirmar contraseña">
            <button type="submit">Registrar</button>
        </form>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>