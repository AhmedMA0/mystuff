<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>16</title>
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
		ini_set('display_errors','1');
		error_reporting(E_ALL);
	
		$conexion = new PDO('mysql:host=localhost;dbname=dwes', 'ahmed', '123456.A');

	?>
<div id="encabezado">
	<h1>Ejercicio: 16</h1>
	<form id="formM" action="#" method="post">
		<?php 

			//select t.nombre, p.nombre_corto, s.unidades from tienda t join stock s on t.cod=s.tienda join producto p on p.cod=s.producto where s.producto='3DSNG';
			
			$sele = $conexion->query("select nombre_corto, cod from producto");

			echo '<select name="prod">';

			while ($se = $sele->fetch()) {
				echo '<option value="'.$se['cod'].'">'.$se['nombre_corto'].'</option>';
			}

			echo '</select>';

		?>
		<input type='submit' value='Registrar' name='go'>
	</form>
</div>

<div id="contenido">
	<h2>Contenido</h2>
	<?php

		$res = $conexion->query("select t.nombre, p.nombre_corto, s.unidades from tienda t join stock s on t.cod=s.tienda join producto p on p.cod=s.producto where s.producto='".$_POST['prod']."';");

		while ($ress= $res->fetch()) {
				
			echo 'Tienda: ' . $ress['nombre'] . '<br>';

			echo 'Producto: ' .$ress['nombre_corto'].': '.$ress['unidades'] . ' unidades. <br>';
				
		}

		$conexion=null;

	?>
</div>

<div id="pie">
</div>
</body>
</html>
