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

    ?>
    <form action="#" method="post">
		<?php 
            //preparamos y ejecutamos una consulta sacando un select con todas las categorias
			$query = $conexion->stmt_init();

            $query->prepare("select * from categoria");

            $query->execute();

            $query->bind_result($id,$nombre);

			echo '<select name="cat" onchange="showProd(this.value)">';
            echo '<option selected="true" disabled="disabled">Elige categoría</option>';    


			while ($query->fetch()) {
				echo '<option value="'.$id.'">'.$nombre.'</option>';
			}

			echo '</select>';
            //liberamos la consulta
            $query->close();
		?>
	</form>
    <div id="prods">Los productos se mostraran aquí...</div>

    <form action="insertarProds.php" method="POST">
        <input type="submit" value="Insertar nuevos">
    </form>

    <form action="ensenarCats.php" method="POST">
        <input type="submit" value="Gestionar categorias">
    </form>

    <?php
		$conexion->close();
	?>

<script src="ajax.js"></script>
</body>
</html>