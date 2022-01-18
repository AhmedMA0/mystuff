<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Plantilla para Ejercicios Tema 3</title>
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="encabezado">
	<h1>Ejercicio: 11</h1>
	<form id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<input type="text" name="prod" autofocus></input>
		<input type='submit' value='Registrar' name='go'>
	</form>
</div>

<div id="contenido">
	<h2>Contenido</h2>
	<?php 	
		$conexion = new mysqli('localhost', 'ahmed', '123456.A', 'dwes');

		$resultado = $conexion->query('select * from stock where producto = (select cod from producto where nombre = '. $_POST['prod']. ');');
		$stock = $resultado->fetch_object();
		while ($stock != null) {
		print '<p>Producto $stock->producto: $stock->unidades unidades.</p>';
			
		$stock = $resultado->fetch_object();
		}
	?>
</div>

<div id="pie">
</div>
</body>
</html>
