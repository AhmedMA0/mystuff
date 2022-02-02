<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
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

			echo '<select name="fam">';

			while ($famQuery->fetch()) {
				echo '<option value="'.$cod.'">'.$name.'</option>';
			}

			echo '</select>';
            //liberamos la consulta
            $famQuery->close();
		?>
		<input type='submit' value='Mostrar' name='go'>
	</form>
    <?php 
        if (isset($_POST['go'])&& !empty($family)) {
            ?>
            <form action="#" method="post">
                <?php

                $prodQuery = $conexion->stmt_init();

                $prodQuery->prepare("select cod, nombre_corto, PVP from producto where familia = '".$family."';");

                $prodQuery->execute();

                $prodQuery->bind_result($cod,$name, $price);

                echo '<select name="prod">';

                while ($prodQuery->fetch()) {
                    echo '<option value="'.$cod.'">'.$name.' <span>'.$price.'</span> </option>';
                }

                echo '</select>';

                $prodQuery->close();
                ?>
                <input type='submit' value='Mostrar' name='go'>
            </form>
            <?php
        }
    ?>
    <?php
		$conexion->close();
	?>
</body>
</html>