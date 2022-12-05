<?php
    require_once('clases/includes.php');
    session_start();

    $idRes = $_SESSION['idRes'];
    $idUser = $_SESSION['idUser']; 
    
    $estado = Reserva::verEstado($idRes);
    $fecha = Reserva::verFecha($idRes);
    $user = Usuario::verUsxId($idUser);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su pedido</title>
    <link href="estilos/universal.css" rel="stylesheet">
    <link href="estilos/header.css" rel="stylesheet">
    <link href="estilos/stylesVerR.css" rel="stylesheet">
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
        <div class='pedido'>
            <div class='cliente'>
                <div class="titulin">Número de reserva: <?php echo $idRes.' ('. $fecha.')';?></div>
                <div class="info"><?php  echo $user;  ?></div>
            </div>
            <div class="info2"> 
                <div class="estado"><?php echo ucfirst($estado);?></div>
                <div id="ajaxDiv"></div>
                <div class="mensaje">
                <?php
                    if ($estado == 'pendiente') {
                        ?>
                            <button type="button" onclick="cambEst(<?php echo $idRes?>,<?php echo '`confirmada`'?>,<?php echo $user->getTlf()?>); location.reload();">Confirmar reserva</button>
                            <button type="button" onclick="cambEst(<?php echo $idRes?>,<?php echo '`cancelada`'?>,<?php echo $user->getTlf()?>); location.reload();">Cancelar reserva</button>
                        <?php
                    }
                    elseif ($estado == 'confirmada') {
                        ?>
                            <button type="button" onclick="cambEst(<?php echo $idRes?>,<?php echo '`cancelado`'?>,<?php echo $user->getTlf()?>); location.reload();">Cancelar reserva</button>
                        <?php
                    }
                    elseif($estado == 'cancelada'){
                        echo 'Reserva cancelada por el cliente.';
                    }

                    elseif ($estado == 'rechazada') {
                        echo 'Reserva rechazada por el establecimiento';
                    }

                    else{
                        echo 'No se puede cancelar la reserva al estar en preparación. Para mas información llame directamente al establecimiento.';
                    }
                ?>
                </div>
            </div>
        </div>
        <?php
        ?>
    </main>
    <script src="ajaxRes.js"></script>
</body>
</html>