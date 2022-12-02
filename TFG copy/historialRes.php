<!DOCTYPE html>
<html id="html" lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="estilos/styles.css" rel="stylesheet">
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

                
                $reses = Reserva::verInfoxIdTODO();
        
                if (!empty($reses)) {
                    foreach ($reses as $id => $res) {
                        echo '<form class="res" action="verReservaAxId.php" method="POST">';
                        echo '<p>Reserva número: '.$id.' Cliente: '.$res['nombreU'].' Tlf: '.$res['tlfU'].' Dir.: '.$res['dirU'].'</p>';
                        echo '<input type="hidden" value="'.$id.'" name="idRes">';
                        echo '<input type="submit" value="Administrar" name="Go">';
                        echo '</form>';
                    }
                }
        
                else {
                    echo 'No hay reserva '.$estado.'.';
                }
        
        ?>
    </main>
</body>
</html>