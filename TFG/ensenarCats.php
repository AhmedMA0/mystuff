<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="estilos/universal.css" rel="stylesheet">
    <link href="estilos/adminNav.css" rel="stylesheet">
    <link href="estilos/adminCats.css" rel="stylesheet">
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
            <ul>
                <li><a class="firstLink" href="./admin.php">Admin</a></li>
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
    <div class="catsDiv" id="catsDiv">
        <p>CATEGORIAS</p>
        <?php   
            require_once('clases/includes.php');

            $cats = Categoria::verCats();
            if (!empty($cats)) {
                echo '<table cellspacing="0" class="cats" id="cats">';
                echo '<tr><th>ID</th><th>Nombre</th><th>Opciones</th></tr>';
                foreach ($cats as $id => $cat) {
                    echo '<tr class="cat">';
                    echo '<td>'.$cat->getId().'</td>';
                    echo '<td>'.$cat->getNombre().'</td>';
                    echo '<td><div class="optionTd">';
                    echo '<form action="editCat.php" method="post">';
                    echo '<input type="hidden" value="'.$cat->getId().'" name="idCat">';
                    echo '<input class="submit" type="submit" value="Actualizar" name="yes">';
                    echo '</form>';
                    echo '<form action="eliminarCat.php" method="post">';
                    echo '<input type="hidden" value="'.$cat->getId().'" name="idCat">';
                    echo '<input class="submit" type="submit" value="Eliminar" name="yes">';
                    echo '</form>';
                    echo '</div></td>';
                    echo '</tr>';
                    echo '<tr class="separador"><td colspan="5"></td></tr>';
                }

                echo '</table>';
                echo '</div>';
            }

            else{
                echo '<p>No hay categorias.</p>';
            }
            
        ?>
    </main>
    <script src="varsAdmin.js"></script>
    <script src="admin.js"></script>
    <script src="ajax.js"></script>
</body>
</html>