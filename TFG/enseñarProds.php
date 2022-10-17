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

            $query->prepare("select nombre from categoria");

            $query->execute();

            $query->bind_result($cat);

			echo '<select name="cats" onchange="showProd(this.value)">';
            echo '<option selected="true" disabled="disabled">Elige categoría</option>';    


			while ($query->fetch()) {
				echo '<option value="'.$cat.'">'.$cat.'</option>';
			}

			echo '</select>';
            //liberamos la consulta
            $query->close();
		?>
	</form>
    <div id="prods"><b>Los productos se mostraran aquí...</b></div>

    <form action="insertarProds.php" method="POST">
        <input type="submit" value="Insertar nuevos">
    </form>

    <?php
		$conexion->close();
	?>

<script src="./ajax.js"></script>
</body>
</html>