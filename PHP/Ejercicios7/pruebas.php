<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php

            setcookie('total','daw',time() + 7*24*60*60);
            $_COOKIE['total'] = 'hola';

            echo $_COOKIE['total'];

            setcookie('total','daw',time() -3600);
            
        ?>

    </body>
</html>