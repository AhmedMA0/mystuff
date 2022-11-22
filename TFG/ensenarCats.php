<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/stylesInserts.css">
    <title>Categorías</title>
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

        $cats = Categoria::verCats();

        foreach ($cats as $id => $cat) {
            echo '<form class= "cat" action="editCat.php" method="post">';
            echo '<p>'.$cat->getNombre().'</p>';
            echo '<input type="hidden" value="'.$cat->getId().'" name="idCat">';
            echo '<input class="submit" type="submit" value="Actualizar" name="yes">';
            echo '</form>';
            echo '<form class= "cat" action="eliminarCat.php" method="post">';
            echo '<input type="hidden" value="'.$cat->getId().'" name="idCat">';
            echo '<input class="submit" type="submit" value="Eliminar" name="yes">';
            echo '</form>';
        }
	?>

    <input type="button" value="Volver" name="no" onclick="location.assign('ensenarProds.php');">

    </main>
<script src="twoFormsInserts.js"></script>
<script src="varsInserts.js"></script>

</body>
</html>