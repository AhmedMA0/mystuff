<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link href="estilos/header.css" rel="stylesheet">
    <link href="estilos/stylesR.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        require_once('clases/includes.php');
    ?>
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

        <div class="forms">
            <form action="insertReserva.php" method="post" id="formR" class="formR">
                <fieldset class="userPartR" id="userPartR">
                    <legend>Datos personales</legend>
                        <p>
                            <div class="labels" id="nombreLabelR"><label for="nombre">Nombre:</label></div>
                            <input type="text" name="nombre" id="nombreR" maxlength="15" pattern="[a-zA-Z]{4,10}" placeholder="Nombre de minimo 4 letras" autofocus required>
                        
                            <div class="labels" id="tlfLabelR"><label for="tlf">Teléfono:</label></div>
                            <input type="text" name="tlf" id="tlfR" pattern="[\d]{9,15}" maxlength="30" placeholder="Numero de minimo 9 digitos" required>
                        </p>
                            <input type="hidden" name="dir" id="dirR" value="Reserva">

                        <div class="labels" id="fechaLabelR"><label for="nombre">Fecha y hora:</label></div>
                        <input type="datetime-local" id="fecha" name="fecha" value="">
                        <script>
                            let fecha = new Date().toJSON().slice(0,16);
                            document.getElementById('fecha').value = fecha;
                        </script>
                        <input type="submit" value="PEDIR" name="allInfo">
                </fieldset>
            </form>   
        </div>
    </main>

    <script src="varsPedido.js"></script>
    <script src="ajaxPed.js"></script>    
</body>
</html>