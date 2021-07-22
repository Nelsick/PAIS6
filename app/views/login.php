<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/views/css/loginStyle.css">
    <title>Iniciar Sesión</title>
</head>

<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <form action="" method="post">
            <span class="alert">
            <?php 
                if(isset($errorLogin)){
                    echo $errorLogin;
                }
            ?>
            </span>
            <label for="username">Nombre de usuario</label>
            <input type="text" name="username" id="username" placeholder="Usuario">
            <label for="password">Contraseña</label>
            <span class="alert"></span>
            <input type="password" name="password" id="pasword" placeholder="Contraseña" required>
            <input type="checkbox" class="checkbox" name="remember" id="remember">
            <label class="checkbox" for="remember">Recuerdame</label>
            <a href="./app/views/signin.php" id="signIn">Nueva cuenta</a>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
    <script src="../app/js/main.js"></script>
</body>
</html>