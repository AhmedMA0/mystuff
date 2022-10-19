<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos2.css">
    <title>Listado</title>
</head>
<body>
    <?php 
		//recibimos la informacion del producto
		$idCat = $_POST['idCat'];
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');
    ?>
    <form action="actualizarCat.php" method="post">
		<?php 

			$firstq = $conexion->stmt_init();

			$firstq->prepare("select nombre from categoria where id = '".$idCat."';");

			$firstq->execute();

			$firstq->bind_result($nombre);

			$firstq->fetch();
			
			?>
            <input type="text" name="nombre" value="<?php echo $nombre?>"><br>
            <input type="hidden" name="idCat" value="<?php echo $idCat?>"><br>
        <?php
			$firstq->close();
		?>
		<input type='submit' value='Actualizar' name='yes'>
		<input type='submit' value='Cancelar' name='no'>

	</form>
	<?php
		$conexion->close();
	?>
</body>
</html>