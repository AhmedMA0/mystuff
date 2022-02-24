<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>18</title>
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	ini_set('display_errors','1<');
	error_reporting(E_ALL);
	
	$conexion = new PDO('mysql:host=localhost;dbname=dwes', 'ahmed', '123456.A');
	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	?>
<div id="encabezado">
	<h1>Ejercicio: 18</h1>
	<form id="formM" action="#" method="post">
		<?php 

			//select t.nombre, p.nombre_corto, s.unidades from tienda t join stock s on t.cod=s.tienda join producto p on p.cod=s.producto where s.producto='3DSNG';
			

			$firstq=$conexion->prepare("select nombre_corto, cod from producto");

			try {
				$firstq->execute();
			} catch (PDOException $p) {
				echo 'Error'.$p->getMessage().'<br>';
			}

			echo '<select name="prod">';

			while ($res = $firstq->fetch()) {
				echo '<option value="'.$res['cod'].'">'.$res['nombre_corto'].'</option>';
			}

			echo '</select>';

			$firstq=null;
		?>
		<input type='submit' value='Registrar' name='go'>
	</form>
</div>

<div id="contenido">
	<h2>Contenido</h2>
	<?php

		try {
			$secondq=$conexion->prepare("select t.nombre, p.nombre_corto, s.unidades from tienda t join stock s on t.cod=s.tienda join producto p on p.cod=s.producto where s.producto='".$_POST['prod']."';");
		} catch (PDOException $p) {
			echo 'Error'.$p->getMessage().'<br>';
		}

		try {
			$secondq->execute();
		} catch (PDOException $p) {
			echo 'Error'.$p->getMessage().'<br>';
		}

		while ($res = $secondq->fetch()) {
				
				echo 'Tienda: ' . $res['nombre'] . '<br>';
	
				echo 'Producto: ' .$res['nombre_corto'].': '.$res['unidades'] . ' unidades. <br>';
				
		}

		$secondq=null;
		$conexion=null;

	?>
</div>

<div id="pie">
</div>
</body>
</html>
