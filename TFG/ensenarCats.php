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
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');

    
        $query = $conexion->stmt_init();
        
        $query->prepare("select * from categoria");
        
        $query->execute();
        
        $query->bind_result($idCat, $nombreCat);

        while ($query->fetch()) {
            echo '<form class= "cat" action="editCat.php" method="post">';
            echo '<p>'.$nombreCat.'</p>';
            echo '<input type="hidden" value="'.$idCat.'" name="idCat">';
            echo '<input class="submit" type="submit" value="Actualizar" name="yes">';
            echo '</form>';
            echo '<form class= "cat" action="eliminarCat.php" method="post">';
            echo '<input type="hidden" value="'.$idCat.'" name="idCat">';
            echo '<input class="submit" type="submit" value="Eliminar" name="yes">';
            echo '</form>';
        }

        //liberamos la consulta
        $query->close();
		$conexion->close();
	?>

    <input type="button" value="Volver" name="no" onclick="location.assign('ensenarProds.php');">


<script src="twoFormsInserts.js"></script>
<script src="varsInserts.js"></script>

</body>
</html>