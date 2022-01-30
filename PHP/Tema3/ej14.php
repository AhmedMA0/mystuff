<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>14</title>  
  <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php 		
	$conexion = new PDO('mysql:host=localhost;dbname=dwes', 'ahmed', '123456.A');
?>

<div id="encabezado">
	<h1>Ejercicio: 14</h1>
</div>

<div id="contenido">
	<h2>Contenido</h2>
    <?php

        //no realizo transacciones porque son inutiles con PDO
        $query1 = $conexion->query("update stock set unidades = '1' where producto = 'PAPYRE62GB' and tienda = '1';");
        echo $query1->rowCount();

        $query2 = $conexion->query("insert into stock (producto, tienda, unidades) values ('PAPYRE62GB','2','1');");
        echo '<br>'. $query2->rowCount();

    ?>
</div>

<div id="pie">
</div>
</body>
</html>
