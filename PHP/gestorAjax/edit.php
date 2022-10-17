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
		//recibimos la informacion del
		$codP = $_POST['codP'];
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456', 'dwes');
    ?>
    <form action="actualizar.php" method="post">
		<?php 

			$firstq = $conexion->stmt_init();

			$firstq->prepare("select cod, nombre_corto, nombre, descripcion, PVP from producto where cod = '".$codP."';");

			$firstq->execute();

			$firstq->bind_result($cod, $nameC, $name, $desc, $pvp);

			$firstq->fetch();
			
			?>
            <input type="hidden" name="cod" value="<?php echo $cod?>">
            <input type="text" name="naS" value="<?php echo $nameC?>"><br>
            <input type="text" name="na" value="<?php echo $name ?? 'Rellena nombre largo.'?>"><br>
            <textarea name="desc" cols="50" rows="10"><?php echo $desc?></textarea><br>
            <input type="text" name="pvp" value="<?php echo $pvp?>"><br>
        <?php

			$firstq->close();
		?>
		<input type='submit' value='Actualizar' name='up'>
		<input type='submit' value='Cancelar' name='ca'>

	</form>
	<?php
		$conexion->close();
	?>
</body>
</html>