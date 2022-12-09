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
    <link href="../estilos/adminReses.css" rel="stylesheet">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e4d7c4912.js" crossorigin="anonymous"></script>
</head>
<body>
    <header id="header">
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
        <div class="divEncima" id="divEncima"></div>
        <div class="arriba">
            <div id="navB" class="navB menosOscuro"><i id="esteNo" class="fa-solid fa-bars-staggered"></i></i></div>
            <form class="closeSes" action="./cerrarSesionAdmin.php" method="POST">
                <input type="submit" value="Cerrar sesión"> 
            </form>
        </div>
        <?php 
            require_once('../clases/includesAdmin.php');

                
                $reses = Reserva::verInfoxIdTODO();
                ?>
                <div class="resesDiv" id="resesDiv">
                    <p>RESERVAS</p>
        <?php
                if (!empty($reses)) {
                    echo '<table cellspacing="0" class="reses" id="reses">';
                    echo '<tr><th>ID</th><th>Estado</th><th>Info. cliente</th><th>Fecha</th><th>Opciones</th></tr>';
                    foreach ($reses as $id => $res) {
                        echo '<tr class="res">';
                        echo '<td class="idTd">'.$id.'</td><td class="estadoTd">'.ucfirst($res['estadoR']).'</td><td class="userTd">'.$res['nombreU'].' '.$res['tlfU'].' '.$res['dirU'].'</td><td class="fechaTd">'.$res['fechaR'].'</td>';
                        echo '<td>';
                        echo '<form action="verReservaAxId.php" method="POST">';
                        echo '<input type="hidden" value="'.$id.'" name="idRes">';
                        echo '<input type="submit" value="Administrar" name="Go">';
                        echo '</form>';
                        echo '</td>';
                        echo '</tr>';
                        echo '<tr class="separador"><td colspan="5"></td></tr>';
                    }
                    echo '</table>';
                    echo '</div>';
                }
        
                else {
                    echo '<p class="noHay">No hay reservas</p>';
                }
        
        ?>
    </main>
    <script src="javaScript/varsAdmin.js"></script>
    <script src="javaScript/admin.js"></script>
    <script src="javaScript/ajax/ajax.js"></script>
</body>
</html>