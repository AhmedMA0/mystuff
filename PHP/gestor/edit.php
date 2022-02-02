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
		//recibimos la informacion del 
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456.A', 'dwes');
    ?>
    <form id="formM" action="#" method="post">
		<?php 

			$firstq = $conexion->stmt_init();

			$firstq->prepare("select * from familia");

			$firstq->execute();

			$firstq->bind_result($cod, $name);

			echo '<select name="prod">';

			while ($firstq->fetch()) {
				echo '<option value="'.$cod.'">'.$name.'</option>';
			}

			echo '</select>';

			$firstq->close();
		?>
		<input type='submit' value='Mostrar' name='go'>
	</form>
	<?php
		$conexion->close();
	?>
</body>
</html>