<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/stylesInserts.css">
    <title>Productos</title>
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