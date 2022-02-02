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
        $conexion = new mysqli('localhost', 'ahmed', '123456.A', 'dwes');
    ?>
    <form action="#" method="post">
		<?php 

			$firstq = $conexion->stmt_init();

			$firstq->prepare("select nombre_corto, nombre, descripcion, PVP from producto where cod = '".$codP."';");

			$firstq->execute();

			$firstq->bind_result($nameC, $name, $desc, $price);	

			$firstq->fetch();
			
			?>
            <input type="text" name="naC" value="<?php echo $nameC?>"><br>
            <input type="text" name="na" value="<?php echo $name ?? 'Rellena nombre largo.'?>"><br>
            <textarea name="desc" cols="50" rows="10"><?php echo $desc?></textarea><br>
            <input type="text" name="pri" value="<?php echo $price?>"><br>
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