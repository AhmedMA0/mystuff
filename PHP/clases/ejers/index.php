<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    

        include_once ("vehiculo.php");
        include_once ("cuatroRuedas.php");
        include_once ("camion.php");
        include_once ("coche.php");
        include_once ("dosRuedas.php");

        /*
        $vehiculo1= new Vehiculo('negro', 1500);

        echo '<br>', $vehiculo1->getPeso();

        $vehiculo1->añadirPersona(70);

        echo '<br>', $vehiculo1->getPeso();


        $vehiculo2= new Vehiculo('verde', 1400);

        $vehiculo2->añadirPersona(65);
        $vehiculo2->añadirPersona(65);

        echo '<br>', $vehiculo2->getPeso(), $vehiculo2->getColor;

        $vehiculo2->repintar('rojo');

        $vehiculo2->añadir_cadenas_nieve();
        $vehiculo2->añadir_cadenas_nieve();

        echo '<br>', $vehiculo2->getColor(), $vehiculo2->getNumero_cadenas_nieve();*/

        $dos_ruedas1 = new DosRuedas('negro', 120);

        $dos_ruedas1->añadirPersona(80);
        $dos_ruedas1->ponerGasolina(20);

        echo '<br>', $dos_ruedas1->getColor(), $dos_ruedas1->getPeso();

        $camion1 = new Camion(2,'azul',10000);

        $camion1->setNumPuertas(2);

        $camion1->añadir_remolque(5);
        $camion1->añadirPersona(80);

        echo '<br>', $camion1->getColor(),' ', $camion1->getPeso(), ' ', $camion1->getlongitud(), ' ', $camion1->getNumPuertas();

        $dos_ruedas2 = new DosRuedas('rojo',150);

        $dos_ruedas2->añadirPersona(70);

        echo '<br>', $dos_ruedas2->getPeso();

        $dos_ruedas2->repintar('verde');

        $dos_ruedas2->setCilindrada(1000);

        DosRuedas::ver_atributo($dos_ruedas2);

        $camion2 = new Camion(2,'blanco', 6000);

        $camion2->añadirPersona(84);

        $camion2->setColor('azul');


        Camion::ver_atributo($camion2);

        $coche1 = new Coche(4, 'verde', 2020);

        $coche1->setNumCadenasNieve(2);
        $coche1->añadirPersona(80);
        $coche1->setNumCadenasNieve($coche1->numCadenasNieve-4);
        $coche1->setColor('negro');

        Coche::ver_atributo($coche1);
    ?>
</body>
</html>