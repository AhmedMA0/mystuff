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
        include_once ("camion.php");
        include_once ("coche.php");
        include_once ("dosRuedas.php");


        $vehiculo1= new Vehiculo('negro', 1500);

        echo $vehiculo1->peso;

        $vehiculo1->añadirPersona(70);

        echo $vehiculo1->peso;


        $vehiculo2= new Vehiculo('verde', 1400);

        $vehiculo2->añadirPersona(65);
        $vehiculo2->añadirPersona(65);

        echo $vehiculo2->peso, $vehiculo2->color;

        $vehiculo2->repintar('rojo');

        $vehiculo2->añadir_cadenas_nieve();
        $vehiculo2->añadir_cadenas_nieve();

        echo $vehiculo2->color, $vehiculo2->numero_cadenas_nieve;

        $dos_ruedas1 = new dosRuedas('negro',120);

        $dos_ruedas1->añadirPersona(80);
        $dos_ruedas1->ponerGasolina(20);

        echo $dos_ruedas1->color, $dos_ruedas1->peso;

        $camion1 = new Camion(2,'azul',10000);

        $camion1->numPuertas = 2;

        $camion1->añadir_remolque(5);
        $camion1->añadirPersona(80);

        echo $camion1->color, $camion1->peso, $camion1->longitud, $camion1->numPuertas;



    ?>
</body>
</html>