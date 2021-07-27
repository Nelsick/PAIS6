<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/views/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Tarea 6</title>
</head>
<body>
    <div class="sidebar">
        <a href="#" class="active"><i class='bx bx-home-smile'></i>Inicio</a>
        <a href="#"><i class='bx bx-user' ></i><?php echo $user->getUsername(); ?></a>
        <a href="#"><i class='bx bx-message-square-detail'></i>Mensajes</a>
        <a href="#"><i class='bx bx-cart'></i>Carrito</a>
        <a href="./app/controllers/logout.php" class="logout"><i class='bx bx-log-out'></i>Cerrar sesión</a>
    </div>
    <div class="container">
        <h1>Manejo de sesiones y Carro de compras</h1>

        <?php 
                include_once './app/controllers/getBooks.php';
                $libros = new book;
                $libro = $libros->getbooks();
            
                foreach($libro as $book){
                    echo 
                    "<div class='card1'>" .
                    "<p><span class='card1p'>Titulo: </span>". $book['titulo'] . "</p>".
                    "<p><span class='card1p'>Autor: </span>". $book['autor'] . "</p>".
                    "<p><span class='card1p'>Editorial: </span>". $book['editorial'] . "</p>".
                    "<p><span class='card1p'>Año: </span>". $book['year'] . "</p>".
                    "<p><span class='card1p'>ISBN: </span>". $book['ISBN'] . "</p>".
                    "<button class='cardbutton' value='".$book['id']."' type='submit'>Agregar al carrito</button>"
                    ."</div>";
                }

            ?>            
        </div>
    </div>
    <script src="app/js/shoppingcar.js"></script>
</body>
</html>