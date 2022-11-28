<!DOCTYPE html>
<html id="html" lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="estilos/verPedidos.css">
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

                echo '<select name="cat" onchange="showPed(this.value)">';
                echo '<option selected="true" disabled="disabled">Elija categoría</option>';    
                echo '<option value="pendiente">Pendiente</option>';
                echo '<option value="cancelado">Cancelado</option>';
                echo '<option value="confirmado">Confirmado</option>';
                echo '<option value="rechazado">Rechazado</option>';
                echo '<option value="en preparacion">En preparación</option>';
                echo '<option value="en reparto">En reparto</option>';
                echo '<option value="entregado">Entregado</option>';
                echo '</select>';
            ?>
        </form>
        <div class="peds" id="peds">
            <p>Los pedidos se mostrarán aquí...</p>
        </div>

        <form action="./historialPeds.php" method="POST">
            <input type="submit" value="Ver historial completo"> 
        </form>
    </main>

    <script src="ajax.js"></script>
    </main>
</body>
</html>