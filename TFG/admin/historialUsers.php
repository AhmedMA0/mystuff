<!DOCTYPE html>
<html id="html" lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="../estilos/universal.css" rel="stylesheet">
    <link href="../estilos/adminNav.css" rel="stylesheet">
    <link href="../estilos/admin.css" rel="stylesheet">    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e4d7c4912.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo" onclick="location.href='../'">
            <img src="../images/logo.png" alt="Logo" class="logoIcon">
            <p class="display">MÕ SUSHI WOK FUSION</p>
        </div>
        <nav>
            <ul>
                <li><a class="firstLink" href="./">Admin</a></li>
                <li class="pedidosL"><i class="fa-solid fa-chevron-down"></i><p class="lvl1 noSalto">Pedidos</p>
                    <ul class="lvl2 pedidos">
                        <li><a href="verPedidos.php">Ver pedidos</a></li>
                        <li><a href="historialPeds.php">Historial pedidos</a></li>
                    </ul>
                </li>
                <li class="reservasL"><i class="fa-solid fa-chevron-down"></i><p class="lvl1 noSalto">Reservas</p>
                    <ul class="lvl2 reservas">
                        <li><a href="verReservas.php">Ver reservas</a></li>
                        <li><a href="historialRes.php">Historial reservas</a></li>
                    </ul>
                </li>
                <li class="pedidosL"><i class="fa-solid fa-chevron-down"></i><p class="lvl1 noSalto">Productos</p>
                    <ul class="lvl2 pedidos">
                        <li><a href="ensenarProds.php">Ver productos</a></li>
                        <li><a href="ensenarCats.php">Ver categorias</a></li>
                        <li><a href="insertarProds.php">Insertar nuevos</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?php 
            require_once('../clases/includesAdmin.php');

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
    <script src="javaScript/varsAdmin.js"></script>
    <script src="javaScript/admin.js"></script>
    <script src="javaScript/ajax/ajax.js"></script>
</body>
</html>