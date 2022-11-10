<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once('clases/includes.php');

        if (isset($_POST['yes'])) {
            $name = $_POST['nombreCat'] ?? 'Sin nombre';
            
            $miCat = new Categoria($name, 0);
            $miCat->crearCat();

        }

        header('Location: ensenarProds.php');

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Nueva categoria</title>
</head>
</html>