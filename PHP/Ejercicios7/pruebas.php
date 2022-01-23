<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php

            setcookie('total','daw',time() + 7*24*60*60);

            if (!isset($_COOKIE['total'])) {
                echo 'hola';
            }

            $hola = false;

            if (isset($hola)) {
                echo 'nose';
            }
        ?>

    </body>
</html>