<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>9</title>  
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php 		
	$conexion = new mysqli('localhost', 'ahmed', '123456.A', 'dwes');
?>

<div id="encabezado">
	<h1>Ejercicio: 9</h1>
</div>

<div id="contenido">
	<h2>Contenido</h2>
    <?php

        $conexion->autocommit(false);

        $conexion->query("update stock set unidades = '1' where producto = '3DSNG' and tienda = '1';");

        $conexion->query("insert into stock (producto, tienda, unidades) values ('3DSNG','3','1');");

        $conexion->commit();
    ?>
</div>

<div id="pie">
</div>
</body>
</html>
