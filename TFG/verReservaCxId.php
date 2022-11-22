<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su pedido</title>
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
        <?php
            require_once('clases/includes.php');

            $idRes = $_POST['idRes'];
            $info = Reserva::verInfoxId($idRes);

            if(empty($info['nombreU'])){
                echo 'RESERVA NO ENCONTRADA. Pruebe otro ID.';
            }

            else{
                $user = new Usuario($info['nombreU'], $info['tlfU'], $info['dirU']);
                $estado = $info['estadoR'];            
        ?>
        <div class='pedido'>
            <div class='cliente'>
                <div class="titulin">Reserva:</div>
                <div class="info"><?php echo $user; ?></div>
            </div>
            <div class="info2"> 
                <div class="estado"><?php echo ucfirst($estado);?></div>
                <div id="ajaxDiv"></div>
                <div class="mensaje">
                <?php
                    if ($estado == 'pendiente') {
                        ?>
                            <button type="button" onclick="cambEst(<?php echo $idRes?>,<?php echo '`enviado`'?>); location.href='./verReservaC.php';">Confirmar pedido.</button>
                            <button type="button" onclick="cambEst(<?php echo $idRes?>,<?php echo '`cancelado`'?>); location.href='./verReservaC.php';">Cancelar pedido.</button>
                        <?php
                    }
                    elseif ($estado == 'enviado') {
                        ?>
                            <button type="button" onclick="cambEst(<?php echo $idRes?>,<?php echo '`cancelado`'?>); location.href='./verReservaC.php';">Cancelar pedido.</button>
                        <?php
                    }
                    elseif($estado == 'cancelado'){
                        echo 'Pedido cancelado por el cliente.';
                    }

                    elseif ($estado == 'rechazado') {
                        echo 'Pedido rechazado por el establecimiento';
                    }

                    else{
                        echo 'No se puede cancelar el pedido al estar en preparación. Para mas información llame directamente al establecimiento.';
                    }
                ?>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </main>

    <script src="ajaxRes.js"></script>

</body>
</html>