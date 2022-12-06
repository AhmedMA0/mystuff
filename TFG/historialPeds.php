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
    <link href="estilos/admin.css" rel="stylesheet">    <link rel="preconnect" href="https://fonts.googleapis.com">
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

                
                $peds = Pedido::verInfoxIdTODO();
                ?>
                <div class="pedsDiv" id="pedsDiv">
                    <p>PEDIDOS</p>
                    <table cellspacing="0" class="peds" id="peds">
                        <tr>
                            <th>ID</th>
                            <th>Estado</th>
                            <th>Info. cliente</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
        <?php
                if (!empty($peds)) {
                    foreach ($peds as $id => $ped) {
                        echo '<tr class="ped">';
                        echo '<td class="idTd">'.$id.'</td><td class="estadoTd">'.ucfirst($ped['estadoP']).'</td><td class="userTd">'.$ped['nombreU'].' '.$ped['tlfU'].' '.$ped['dirU'].'</td><td class="fechaTd">'.$ped['fechaP'].'</td>';
                        echo '<td>';
                        echo '<form action="verPedidoAxId.php" method="POST">';
                        echo '<input type="hidden" value="'.$id.'" name="idPed">';
                        echo '<input type="submit" value="Administrar" name="Go">';
                        echo '</form>';
                        echo '</td>';
                        echo '</tr>';
                        echo '<tr class="separador"><td colspan="5"></td></tr>';
                    }
        ?>
                        </table>
                    </div>
        <?php
                }
        
                else {
                    echo 'No hay pedido '.$estado.'.';
                }
        
        ?>
    </main>
</body>
</html>