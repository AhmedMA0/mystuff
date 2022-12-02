<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/stylesInserts.css">
    <title>Productos</title>
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
        ?>
        <form id="catForm" class="catForm" action="insertCat.php" method="post">
            <input type="text" name="nombreCat" id="nombreCat" required placeholder="Inserte nueva categoria.">
            <input type="submit" value="Confirmar" name="yes">
            <input type="button" value="Cancelar" name="no" onclick="location.assign('ensenarProds.php');">
        </form>

        <form id="prodForm" class="prodForm" action="insertProd.php" method="post">
            <input type="text" name="nombreProd" id="nombreProd" required placeholder="Nombre del producto.">
            <input type="text" name="desc" id="desc" required placeholder="Descripción del producto.">
            <input type="number" step="0.01" min="0" name="precio" id="precio" required placeholder="Precio del producto.">
        
            <?php
            
                
                echo '<select name="cat" required>';
                echo '<option selected="true" disabled="disabled">Elija categoría</option>';    

                $cats = Categoria::verCats();

                foreach ($cats as $id => $cat) {
                    echo '<option value="'.$cat->getId().'">'.$cat->getNombre().'</option>';
                }

                echo '</select>';
                ?>
            <input type="submit" value="Confirmar" name="yes">
            <input type="button" value="Cancelar" name="no" onclick="location.assign('ensenarProds.php');">

        </form>
        <div id="chButtons" class="chButtons">
            <span id="cat" class="buttonAni buttonCat" onclick="printForm(this.id);"><a></a></span>
            <span id="prod" class="buttonAni buttonProd" onclick="printForm(this.id);"><a></a></span>
        </div>
    </main>
<script src="twoFormsInserts.js"></script>
<script src="varsInserts.js"></script>

</body>
</html>