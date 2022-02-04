<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <title>Update</title>
    </head>
    <body>
    <form action="#" method="post">
        <input type="text" name="t">
        <input type="submit" name="n">
        <input type="submit" name="s">
    </form>
        <?php
            $hola = $_POST['nada'] ?? 'h';

            echo $hola;
        ?>
    </body>
</html>