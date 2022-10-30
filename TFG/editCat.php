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
		$idCat = $_POST['idCat'];
    ?>
    <form action="actualizarCat.php" method="post">
		<?php 

			$nombre = Categoria::verCat($idCat);
			
			?>
            <input type="text" name="nombre" value="<?php echo $nombre?>"><br>
            <input type="hidden" name="idCat" value="<?php echo $idCat?>"><br>

		<input type='submit' value='Actualizar' name='yes'>
		<input type='submit' value='Cancelar' name='no'>

	</form>
</body>
</html>