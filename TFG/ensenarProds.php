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

    <form action="#" method="post">
		<?php

			echo '<select name="cat" onchange="showProd(this.value)">';
            echo '<option selected="true" disabled="disabled">Elige categoría</option>';    

            $cats = Categoria::verCats();

            foreach ($cats as $id => $nombre) {
                echo '<option value="'.$id.'">'.$nombre.'</option>';
            }
			echo '</select>';
            //liberamos la consulta
		?>
	</form>
    <div id="prods">Los productos se mostraran aquí...</div>

    <form action="insertarProds.php" method="POST">
        <input type="submit" value="Insertar nuevos">
    </form>

    <form action="ensenarCats.php" method="POST">
        <input type="submit" value="Gestionar categorias">
    </form>

    <script src="ajax.js"></script>
</body>
</html>