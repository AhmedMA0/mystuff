<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Listado</title>
</head>
<script src="./ajax.js"></script>
<body>
    <?php   
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456.A', 'dwes');

        //intentamos recibir la informacion de la familia seleccionada para la segunda vuelta
        $family = $_POST['fam'] ?? '';
    ?>
    <form action="#" method="post">
		<?php 
            //preparamos y ejecutamos una consulta sacando un select con todas las familias
			$famQuery = $conexion->stmt_init();

            $famQuery->prepare("select * from familia");

            $famQuery->execute();

            $famQuery->bind_result($cod, $name);

			echo '<select name="fam" onchange="showProd(this.value)">';
            echo '<option selected="true" disabled="disabled">Elige producto</option>';    


			while ($famQuery->fetch()) {
				echo '<option value="'.$cod.'">'.$name.'</option>';
			}

			echo '</select>';
            //liberamos la consulta
            $famQuery->close();
		?>
	</form>
    <div id="txtHint"><b>Product info will be listed here...</b></div>

    <?php
		$conexion->close();
	?>
</body>
</html>