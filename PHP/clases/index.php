<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        include_once ("vehiculo.php");
        include_once ("cuatroRuedas.php");
        include_once ("dosRuedas.php");
        include_once ("camion.php");
        include_once ("coche.php");

        $coche= new Coche();

    ?>
</body>
</html>