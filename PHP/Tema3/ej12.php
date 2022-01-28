<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>11</title>
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php 		
		$conexion = new mysqli('localhost', 'ahmed', '123456.A', 'dwes');

		$thirdq= $conexion->stmt_init();

	?>
<div id="encabezado">
	<h1>Ejercicio: 11</h1>
	<form id="formM" action="#" method="post">
		<?php 

			//select t.nombre, p.nombre_corto, s.unidades from tienda t join stock s on t.cod=s.tienda join producto p on p.cod=s.producto where s.producto='3DSNG';
			$firstq = $conexion->stmt_init();

			$firstq->prepare("select nombre_corto from producto");

			$firstq->execute();

			$firstq->bind_result($name);

			echo '<select name="prod">';

			while ($firstq->fetch()) {
				echo '<option value="'.$name.'">'.$name.'</option>';
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
		$secondq= $conexion->stmt_init();

		$secondq->prepare("select producto, unidades from stock where producto = (select cod from producto where nombre_corto = '".$_POST['prod']."');");

        $secondq->execute();

        $secondq->bind_result($producto, $unidades);
		while ($stock != null) {

			$tienda = $conexion->query("select nombre from tienda where cod = '". $stock->tienda."';");

			$ti = $tienda->fetch_object();

			echo 'Tienda: ' . $ti->nombre . '<br>';

			echo 'Producto: ' .$producto.': '.$unidades . ' unidades. <br>';
				
			$stock = $resultado->fetch_object();
		}

		$conexion->close();
	?>
</div>

<div id="pie">
</div>
</body>
</html>
