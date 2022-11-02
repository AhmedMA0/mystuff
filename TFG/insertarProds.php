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

            foreach ($cats as $id => $nombre) {
                echo '<option value="'.$id.'">'.$nombre.'</option>';
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
<script src="twoFormsInserts.js"></script>
<script src="varsInserts.js"></script>

</body>
</html>