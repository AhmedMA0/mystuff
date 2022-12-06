<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="estilos/universal.css" rel="stylesheet">
    <link href="estilos/adminNav.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo" onclick="location.href='./'">
            <img src="images/logo.png" alt="Logo" class="logoIcon">
            <p class="display">MÕ SUSHI WOK FUSION</p>
        </div>
        <nav>
            <a href="./">Home</a>
            <a href="./pedido.php">Pedir</a>
            <a href="reserva.php">Reservar</a>
            <a href="checkPedido.php">Comprobar pedido</a>
            <a href="checkReserva.php">Comprobar reserva</a>
        </nav>
    </header>
    <main>
        <?php 
        
        require_once('clases/includes.php');
        ?>

        <form action="#" method="post">
            <?php

                echo '<select name="cat" onchange="showProd(this.value)">';
                echo '<option selected="true" disabled="disabled">Elija categoría</option>';    

                $cats = Categoria::verCats();

                foreach ($cats as $id => $cat) {
                    echo '<option value="'.$cat->getId().'">'.$cat->getNombre().'</option>';
                }
                echo '</select>';
            ?>
        </form>
        <div id="prods">Los productos se mostraran aquí...</div>

        <form action="insertarProds.php" method="POST">
            <input type="submit" value="Insertar nuevos">
        </form>

        <form action="ensenarCats.php" method="POST">
            <input type="submit" value="Gestionar categorias">
        </form>
    </main>

    <script src="ajax.js"></script>
</body>
</html>