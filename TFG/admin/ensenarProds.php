<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="../estilos/universal.css" rel="stylesheet">
    <link href="../estilos/adminNav.css" rel="stylesheet">
    <link href="../estilos/adminProds.css" rel="stylesheet">
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
        ?>
        <p>PRODUCTOS</p>
        <div class="tools">
                <form action="#" method="post">
                    <?php

                        echo '<select name="cat" onchange="showProd(this.value)">';
                        echo '<option selected="true" disabled="disabled">Elija categoría</option>';    

                        $cats = Categoria::verCats();

                        foreach ($cats as $id => $cat) {
                            echo '<option value="'.$cat->getId().'">'.$cat->getNombre().'</option>';
                        }
                        echo '</select>';
                    ?>
                </form>
            <div class="options">
                <form action="insertarProds.php" method="POST">
                    <input type="submit" value="Insertar nuevos">
                </form>

                <form action="ensenarCats.php" method="POST">
                    <input type="submit" value="Gestionar categorias">
                </form>
            </div>

        </div>

        <div class="pedsDiv" id="pedsDiv">
            <table cellspacing="0" class="prods" id="prods">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Desripción</th>
                    <th>Opciones</th>
                </tr>
            </table>
        </div>

    </main>
    <script src="javaScript/varsAdmin.js"></script>
    <script src="javaScript/admin.js"></script>
    <script src="javaScript/ajax/ajax.js"></script>
</body>
</html>