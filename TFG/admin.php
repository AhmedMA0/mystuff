<!DOCTYPE html>
<html id="html" lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="estilos/universal.css" rel="stylesheet">
    <link href="estilos/adminNav.css" rel="stylesheet">
    <link href="estilos/admin.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e4d7c4912.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo" onclick="location.href='./admin.php'">
            <img src="images/logo.png" alt="Logo" class="logoIcon">
            <p class="display">MÕ SUSHI WOK FUSION</p>
        </div>
        <nav>
            <a class="firstLink" href="./admin.hp">Admin</a>
            <a href="verPedidos.php">Pedidos</a>
            <a href="historialPeds.php">Historial pedidos</a>
            <a href="verReservas.php">Reservas</a>
            <a href="historialRes.php">Historial reservas</a>
        </nav>
    </header>

    <main>
        <?php 
            require_once('clases/includes.php');
        ?>
    </main>
</body>
</html>