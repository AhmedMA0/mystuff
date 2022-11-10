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


<script src="twoFormsInserts.js"></script>
<script src="varsInserts.js"></script>

</body>
</html>