<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>12</title>
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	ini_set('display_errors','1');
	error_reporting(E_ALL);
	
		$conexion = new mysqli('localhost', 'ahmed', '123456.A', 'dwes');

	?>
<div id="encabezado">
	<h1>Ejercicio: 12</h1>
	<form id="formM" action="#" method="post">
		<?php 

			//select t.nombre, p.nombre_corto, s.unidades from tienda t join stock s on t.cod=s.tienda join producto p on p.cod=s.producto where s.producto='3DSNG';
			$firstq = $conexion->stmt_init();

			$firstq->prepare("select nombre_corto, cod from producto");

			$firstq->execute();

			$firstq->bind_result($name, $cod);

			echo '<select name="prod">';

			while ($firstq->fetch()) {
				echo '<option value="'.$cod.'">'.$name.'</option>';
			}

			echo '</select>';

			$firstq->close();
		?>
		<input type='submit' value='Registrar' name='go'>
	</form>
</div>

<div id="contenido">
	<h2>Contenido</h2>
	<?php

		$secondq = $conexion->stmt_init();
		
		$secondq->prepare("select t.nombre, p.nombre_corto, s.unidades from tienda t join stock s on t.cod=s.tienda join producto p on p.cod=s.producto where s.producto='".$_POST['prod']."';");

        $secondq->execute();

        $secondq->bind_result($tienda, $producto, $unidades);

		while ($secondq->fetch()) {
				
				echo 'Tienda: ' . $tienda . '<br>';
	
				echo 'Producto: ' .$producto.': '.$unidades . ' unidades. <br>';
				
		}

		$secondq->close();
		$conexion->close();

	?>
</div>

<div id="pie">
</div>
</body>
</html>
