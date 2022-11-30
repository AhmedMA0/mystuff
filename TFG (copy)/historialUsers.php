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

                $users = Usuario::verUsers();
        
                if (!empty($users)) {
                    foreach ($users as $id => $user) {
                        echo '<div>';
                        echo '<div>Cliente número: '.$id.' Nombre: '.$user->getNombre().' Tlf: '.$user->getTlf().' Dir.: '.$user->getDir().'</div>';
                        echo '<div>';
                        $peds = Pedido::verPedsxUser($id);
                        if (!empty($peds)) {
                            foreach ($peds as $pos => $idPed) {
                                echo '<div class="pedForm">';
                                echo '<form class="ped" action="verPedidoAxId.php" method="POST">';
                                echo '<p>Pedido número: '.$idPed.'</p>';
                                echo '<input type="hidden" value="'.$idPed.'" name="idPed">';
                                echo '<input type="submit" value="Ver" name="admin">';
                                echo '</form>';
                                echo '</div>';
                            }
                        }
                        $reses = Reserva::verResxUser($id);
                        if (!empty($reses)) {
                            foreach ($reses as $pos => $idRes) {
                                echo '<div class="pedForm">';
                                echo '<form class="ped" action="verReservaAxId.php" method="POST">';
                                echo '<p>Reserva número: '.$idRes.'</p>';
                                echo '<input type="hidden" value="'.$idRes.'" name="idRes">';
                                echo '<input type="submit" value="Ver" name="admin">';
                                echo '</form>';
                                echo '</div>';
                            }
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                }
        
                else {
                    echo 'No hay usuarios.';
                }
        
        ?>
    </main>
</body>
</html>