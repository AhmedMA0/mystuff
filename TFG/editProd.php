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
		$prodName = $_POST['idProd'];
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');
    ?>
    <form action="actualizarProd.php" method="post">
		<?php 

			$firstq = $conexion->stmt_init();

			$firstq->prepare("select descr, precio from producto where nombre = '".$prodName."';");

			$firstq->execute();

			$firstq->bind_result($desc, $precio);

			$firstq->fetch();
			
			?>
            <input type="text" name="nombre" value="<?php echo $prodName?>" readonly><br>
            <textarea name="desc" cols="50" rows="10"><?php echo $desc ?? 'Descripción aquí.'?></textarea><br>
            <input type="number" step="0.01" min="0" name="precio" value="<?php echo $precio?>"><br>
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