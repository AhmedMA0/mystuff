<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            setcookie('total',0,time() + 7*24*60*60);

            $_COOKIE['total']+=2;

            echo $_COOKIE['total'];
        ?>

    </body>
</html>