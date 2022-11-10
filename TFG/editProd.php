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
        require_once('clases/includes.php');

		//recibimos la informacion del producto
		$prodName = $_POST['idProd'];
    ?>
    <form action="actualizarProd.php" method="post">
		<?php 
			$prod = Producto::verProdsxNombre($prodName);
		?>
		<input type="text" name="nombre" value="<?php echo $prod->getNombre()?>" readonly><br>
		<textarea name="desc" cols="50" rows="10"><?php echo $prod->getDesc() ?? 'Descripción aquí.'?></textarea><br>
		<input type="number" step="0.01" min="0" name="precio" value="<?php echo $prod->getPvp();?>"><br>
		<input type='submit' value='Actualizar' name='yes'>
		<input type='submit' value='Cancelar' name='no'>
	</form>
</body>
</html>