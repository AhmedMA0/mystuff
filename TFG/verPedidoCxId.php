<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su pedido</title>
    <link href="estilos/stylesVerP.css" rel="stylesheet">
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
            <a href="">Home</a>
            <a href="">Pedir</a>
            <a href="">Reservar</a>
            <a href="checkPedido.php">Comprobar pedido</a>
        </nav>
    </header>
    <main>
        <?php
            require_once('clases/includes.php');

            $idPed = $_POST['idPed'];
            $info = Pedido::verInfoxId($idPed);

            if(empty($info['nombreU'])){
                echo 'PEDIDO NO ENCONTRADO. Pruebe otro ID.';
            }

            else{
                $user = new Usuario($info['nombreU'], $info['tlfU'], $info['dirU']);
                $estado = $info['estadoP'];
                $lineas = Linea::verLineaxPedido($idPed);
            
        ?>
        <div class='pedido'>
            <div class='cliente'>
                <div class="titulin">Pedido:</div>
                <div class="info"><?php echo $user; ?></div>
            </div>
            <div class="lineas">
                <?php
                    $i = 0;
                    $total = 0;
                    foreach ($lineas as $key => $value) {
                        echo '<div class="linea linea'.$i.'">';
                        echo '<div class="prodData nombreProd">'.$value->getIdProd().' x'.$value->getCant().'</div>';
                        echo '<div class="prodData precioProd">'.$value->getPrecioT().'€</div>';
                        echo '</div>';
                        $i++;
                        $total += $value->getPrecioT();
                    }
                ?>
            </div>
            <div class="total">
                <div class="estado"><?php echo ucfirst($estado);?></div>
                <div class="subtotal">
                    <p><?php echo $total;?>€</p>
                    <p class="lineaAbajo">Servicio a domicilio: <?php echo $servicio;?>€</p>
                    <p><?php echo $total + $servicio;?>€</p>
                </div>
            </div>
            <div id="ajaxDiv"></div><?php
                if ($estado == 'pendiente') {
                    ?>
                        <button type="button" onclick="cambEst(<?php echo $idPed?>,<?php echo '`enviado`'?>); location.href='./verPedidoCxId.php';">Confirmar pedido.</button>
                        <button type="button" onclick="cambEst(<?php echo $idPed?>,<?php echo '`cancelado`'?>); location.href='./verPedidoCxId.php';">Cancelar pedido.</button>
                    <?php
                }
                elseif ($estado == 'enviado') {
                    ?>
                        <button type="button" onclick="cambEst(<?php echo $idPed?>,<?php echo '`cancelado`'?>); location.href='./verPedidoCxId.php';">Cancelar pedido.</button>
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
        <?php
            }
        ?>
    </main>

    <script src="ajaxPed.js"></script>

</body>
</html>